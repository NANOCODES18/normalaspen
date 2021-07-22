<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\visiors_detail;
Use App\Models\payment_method;
Use App\Models\ssn_first_detail;
Use App\Models\ssn_last_detail;
use App\Models\visitors_detail;
use PhpParser\Node\Stmt\Else_;
use Symfony\Component\HttpFoundation\Cookie;

class guestController extends Controller
{
    //
    /***
*  This function returns indexpage upon visitors visit */
    public function index()
    {

        return view("index");
}

   /***
*  This function returns about us upon visitors click*/
public function about()
{

    return view("about");
}


   /***
*  This function returns contact us upon visitors clcik*/
public function contact()
{

    return view("contact");
}


   /***
*  This function takes a visitor to the details page where details will be dispalyed*/
public function logvisitor(Request $req)
{
  $code = $req->code;
    $user_details_sel = visitors_detail::where("code", $code)->first();

    if (is_null($user_details_sel)) {
    # code...
        return view('index', ['status'=>'You entered Invalid code'])->with('error','please check the code and try again');

    }
    else {
        # code...
        $req->session()->put('usercode', $code);

        $data = ['data'=>$user_details_sel];

        return redirect()->route('profile')->with('success','success please provide the last four (4) digits of your SSN below to proceed with verification');
    }

}





}
