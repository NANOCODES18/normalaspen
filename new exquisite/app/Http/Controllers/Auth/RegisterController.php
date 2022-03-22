<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fund;
use App\Models\Referral;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Adminmail;

class RegisterController extends Controller
{
    public $owneremail = "gettingsnano@gmail.com";
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'min:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $newuser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);



        $finance_add = new Fund();
        $finance_add->userid = $newuser->id;
        $finance_add->save();
        $newuser->attachRole('Superadministrator');

        if (isset($data['refid'])) {
            # code...
            $newref = new Referral();
            $newref->oldusernamename = "nousername";
            $newref->newuser = $newuser->id;
            $newref->olduseremail = $data['refid'];
            $newref->olduseruserid = $data['refid'];
            $newref->save();
        } else {
            # code...
        }

        



        $newuseremail = $data['email'];

        $name =$data['name'];

        $mail = " Welcome to Exquisite Options!<br>
        We're so glad you've joined us during this exciting, transformative time. As an Exquisite Options Member, you'll have access to all the financial tools and insights that make our approach extraordinary.
        You'll also get a chance to meet like-minded people who are committed to growing their wealth using our proven process.
        If you have any questions, please don't hesitate to contact us anytime. We're more than happy to help! " ;

        $mailtitle = "Registration Successful";

        $emaildata = ['data' => $newuseremail, 'email_body' => $mail, 'email_header' => $mailtitle];

        Mail::to($newuseremail)->send(new Adminmail($emaildata));







        $newuser->save();
        return $newuser;
    }
}
