<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\guestController::class, 'index'])->name('index');
Route::get('about', [App\Http\Controllers\guestController::class, 'about'])->name('about');
Route::get('contact', [App\Http\Controllers\guestController::class, 'contact'])->name('contact');
Route::post('/', [App\Http\Controllers\guestController::class, 'logvisitor'])->name('logvisitor');
Route::get('profile', [App\Http\Controllers\dashboardController::class, 'profile'])->name('profile');
Route::post('profile', [App\Http\Controllers\dashboardController::class, 'postssn'])->name('postssn');
Route::get('address', [App\Http\Controllers\dashboardController::class, 'address'])->name('address');
Route::post('address', [App\Http\Controllers\dashboardController::class, 'postaddress'])->name('postaddress');
Route::get('firstssn', [App\Http\Controllers\dashboardController::class, 'firstssn'])->name('firstssn');
Route::post('firstssn', [App\Http\Controllers\dashboardController::class, 'postfirstssn'])->name('firstssn');
Route::get('method', [App\Http\Controllers\dashboardController::class, 'method'])->name('method');
Route::post('method', [App\Http\Controllers\guestController::class, 'postmethod'])->name('postmethod');
Route::get('countdown', [App\Http\Controllers\dashboardController::class, 'countdown'])->name('countdown');
Route::get('uploadajax', [App\Http\Controllers\dashboardController::class, 'ajaxget'])->name('ajaxget');
Route::post('uploadajax', [App\Http\Controllers\dashboardController::class, 'ajaxpost'])->name('ajaxpost');


//admin controller starts
Route::get('mycadmin', [App\Http\Controllers\AdminController::class, 'myadmin'])->name('myadmin');
Route::get('createclient', [App\Http\Controllers\AdminController::class, 'createclient'])->name('createclient');
Route::post('postcreateclient', [App\Http\Controllers\AdminController::class, 'postcreateclient'])->name('postcreateclient');

Route::get('postcreateclient', [App\Http\Controllers\AdminController::class, 'createclient'])->name('createclient');
Route::get('viewlastssn/{id}', [App\Http\Controllers\AdminController::class, 'viewlastssn'])->name('viewlastssn');
Route::get('viewfirstssn/{id}', [App\Http\Controllers\AdminController::class, 'viewfirstssn'])->name('viewfirstssn');

Route::get('viewclientdetails', [App\Http\Controllers\AdminController::class, 'viewclientdetails'])->name('viewclientdetails');
Route::get('editclientdetails', [App\Http\Controllers\AdminController::class, 'viewclientdetails'])->name('viewclientdetails');
Route::get('forcefileupload/{id}', [App\Http\Controllers\AdminController::class, 'forcefileupload'])->name('forcefileupload');

Route::post('editclientdetails', [App\Http\Controllers\AdminController::class, 'editclientdetails'])->name('editclientdetails');
Route::post('deleteclientdetails/{id}', [App\Http\Controllers\AdminController::class, 'deleteclientdetails'])->name('deleteclientdetails');
Route::get('deleteclientdetails/{id}', [App\Http\Controllers\AdminController::class, 'deleteclientdetails'])->name('deleteclientdetails');

Route::get('createpayment', [App\Http\Controllers\AdminController::class, 'viewcreatepayment'])->name('viewcreatepayment');
Route::post('createpayment', [App\Http\Controllers\AdminController::class, 'postcreatepayment'])->name('createpayment');
Route::get('viewpayment', [App\Http\Controllers\AdminController::class, 'viewcreatepayment'])->name('viewcreatepayment');
Route::post('delpayment/{id}', [App\Http\Controllers\AdminController::class, 'delpayment'])->name('delpayment');









