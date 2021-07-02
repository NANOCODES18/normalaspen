<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
public function logvisitor()
{

    return view("dashlike.profile");
}

}
