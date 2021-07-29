<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitors_detail;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\payment_method;
use App\Models\ssn_first_detail;
use App\Models\ssn_last_detail;

class AdminController extends Controller
{
    //
    use SoftDeletes;
    public function myadmin()
{
    return view("admin.adminhome");

}



public function createclient()
{
    return view("admin.createclient");
}



public function postcreateclient(Request $req)
{
    $name = $req->name;
    $email = $req->email;
    $dob = $req->dob;
    $phone = $req->phone;
    $occupation = $req->occupation;
    $code = $req->code;
    $passport = $req->passport;

$client = new visitors_detail;
$client->name = $name;
$client->dob = $dob;
$client->email = $email;
$client->code = $code;
$client->phone = $phone;
$client->occupation = $occupation;


$file_extension =$req->file('passport')->getClientOriginalExtension();
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
  $path =$req->file('passport')->storeAS("public/passports",$fileName);

  $client->passport = $fileName;

  $savedreport = $client->save();

  if ($savedreport) {
      # code...
      return redirect()->route('viewclientdetails') ->with('success','client created successfully!');
  }

  return redirect()->route('viewclientdetails')->with('error','client creation failed!');

}



public function viewssn()
{

}



public function viewclientdetails()
{
    $clientdetails = visitors_detail::all();
    $cd = ['clientdetails'=>$clientdetails];
    return view('admin.adminclientslist', $cd);
}



public function editclientdetails(Request $req)
{

$name = $req->name;
$email = $req->email;
$dob = $req->dob;
$phone = $req->phone;
$occupation = $req->occupation;
$code = $req->code;
$passport = $req->passport;
$firstssn = $req->firstssn;
$lastssn = $req->lastssn;
$payment = $req->payment_method;
$address = $req->address;
$client_id = $req->id;


$client = visitors_detail::where('id', $client_id)->first();

$client->name = $name;
$client->dob = $dob;
$client->email = $email;
$client->code = $code;
$client->phone = $phone;
$client->occupation = $occupation;
$client->phone = $phone;
$client->firstssn = $firstssn;
$client->lastssn = $lastssn;
$client->payment_method = $payment;
$client->address = $address;
if (is_null($passport)) {
    # code...
}
else {
    # code...

$file_extension =$req->file('passport')->getClientOriginalExtension();
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
  $path =$req->file('passport')->storeAS("public/passports",$fileName);

  $client->passport = $fileName;

}
$result=$client->save();
if ($result) {
    # code...
    $clientdetails = visitors_detail::all();
    $cd = ['clientdetails'=>$clientdetails];
    return redirect()->route('viewclientdetails') ->with('success', 'Details edited succesfully');
}
else {
    # code...
    $clientdetails = visitors_detail::all();
    $cd = ['clientdetails'=>$clientdetails];
    return redirect()->route('viewclientdetails') ->with('error', 'details not saved please try again');
}
}



public function deleteclientdetails(Request $req)
{
    $id = $req->id;
    $detail= visitors_detail::where('id', $id)->first();

    if ($detail->delete()) {
        # code...
        $clientdetails = visitors_detail::all();
        $cd = ['clientdetails'=>$clientdetails];
        return redirect()->route('viewclientdetails') ->with('warning', 'Details deleted succesfully');

    }
    else {
        # code...
        $clientdetails = visitors_detail::all();
        $cd = ['clientdetails'=>$clientdetails];
        return redirect()->route('viewclientdetails') ->with('error', 'failed to delete');

    }



}

public function viewcreatepayment(){
    $payments = payment_method::all();
    $data = ['payments'=>$payments];
    return view('admin.paymentmethods',$data);
}

public function postcreatepayment(Request $req){
    $payments = new payment_method;
    $payments->payment_method = $req->method;

    if ($payments->save()) {
        # code...
        $method= payment_method::all();
        $data = ['payments'=>$method];
    return redirect()->route('viewcreatepayment') ->with('success','payment created succesfuly!');
    }
    else {
        # code...
        $method= payment_method::all();
        $data = ['payments'=>$method];
    return redirect()->route('viewcreatepayment') ->with('error','payment method failed to create!');
    }

}

public function delpayment(Request $req){
    $id = $req->id;
    $method= payment_method::where('id',$id)->first();

    if ( $method->delete()) {
        # code...
        $payments = payment_method::all();
    $data = ['payments'=>$payments];
    return redirect()->route('viewcreatepayment') ->with('warning','deleted succesfuly');
    }
    else {
        # code...
        $payments = payment_method::all();
    $data = ['payments'=>$payments];
    return redirect()->route('viewcreatepayment') ->with('danger','failed to delete');
    }

}

public function viewlastssn(Request $req)
{
    $id = $req->id;
    $lastssn = ssn_last_detail::where('id',$id)->get();
    $data=['lastssn'=>$lastssn];
    return view('admin.lastssn',$data);

}

public function viewfirstssn(Request $req)






{
    $id = $req->id;
    $firstssn = ssn_first_detail::where('id',$id)->get();
    $data=['firstssn'=>$firstssn];
    return view('admin.firstssn', $data);
}



public function forcefileupload(Request $req){
    $id = $req->id;
    $visitor = visitors_detail::where("id", $id)->first();
    $visitor->formupload=1;
    if ($visitor->save()) {
        # code...
        return redirect()->route('viewclientdetails') ->with('success', 'Upload mandated succesfuly');
    } else {
        # code...
        return redirect()->route('viewclientdetails') ->with('warning', 'Mandating upload failed');

    }

}

}
