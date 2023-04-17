<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\usercontroller;
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

Route::get('/',[indexcontroller::class,'index']);
Route::get('/registration',[indexcontroller::class,'registration']);
Route::post('/registrationaction',[indexcontroller::class,'registrationaction']);
Route::get('/contactus',[indexcontroller::class,'contactus']);
Route::get('/publicaboutus',[indexcontroller::class,'aboutus']);
Route::post('/contactusaction',[indexcontroller::class,'contactusaction']);
Route::get('/viewregistration',[indexcontroller::class,'viewregistration']);
Route::get('/userlogin',[indexcontroller::class,'userlogin']);
Route::post('/userloginaction',[indexcontroller::class,'userloginaction']);

Route::get('/user',[usercontroller::class,'index']);
Route::get('/aboutus',[usercontroller::class,'aboutus']);
Route::get('/viewinsurancepolicies',[usercontroller::class,'viewinsurancepolicies']);
Route::get('/myprofile',[usercontroller::class,'myprofile']);
Route::post('/myprofileaction/{id}',[usercontroller::class,'myprofileaction']);
Route::get('/appliedinsurancepolicies',[usercontroller::class,'appliedinsurancepolicies']);
Route::get('/apply/{id}',[usercontroller::class,'apply']);
Route::post('/applyaction/{id}',[usercontroller::class,'applyaction']);
Route::get('/tickets',[usercontroller::class,'tickets']);
Route::post('/ticketsaction',[usercontroller::class,'ticketsaction']);
Route::get('/viewticket',[usercontroller::class,'viewticket']);



Route::get('/admin',[admincontroller::class,'login']);
Route::get('/adminindex',[admincontroller::class,'index']);
Route::get('/addcategory',[admincontroller::class,'addcategory']);
Route::post('/addcategoryaction',[admincontroller::class,'addcategoryaction']);
Route::get('/viewcategory',[admincontroller::class,'viewcategory']);
Route::get('/editcategory/{id}',[admincontroller::class,'editcategory']);
Route::post('/editcategoryaction/{id}',[admincontroller::class,'editcategoryaction']);
Route::get('/deletecategory/{id}',[admincontroller::class,'deletecategory']);
Route::get('/addsubcategory',[admincontroller::class,'addsubcategory']);
Route::post('/addsubcategoryaction',[admincontroller::class,'addsubcategoryaction']);
Route::get('/viewsubcategory',[admincontroller::class,'viewsubcategory']);
Route::get('/editsubcategory/{id}',[admincontroller::class,'editsubcategory']);
Route::post('/editsubcategoryaction/{id}',[admincontroller::class,'editsubcategoryaction']);
Route::get('/deletesubcategory/{id}',[admincontroller::class,'deletesubcategory']);
Route::get('/addpolicy',[admincontroller::class,'addpolicy']);
Route::get('/subcategories/{id}', [admincontroller::class,'viewsub'])->name('subcategories.viewsub');
Route::post('/addpolicyaction',[admincontroller::class,'addpolicyaction']);
Route::get('/viewpolicy',[admincontroller::class,'viewpolicy']);
Route::get('/editpolicy/{id}',[admincontroller::class,'editpolicy']);
Route::post('/editpolicyaction/{id}',[admincontroller::class,'editpolicyaction']);
Route::get('/deletepolicy/{id}',[admincontroller::class,'deletepolicy']);
Route::get('/addabout',[admincontroller::class,'addabout']);
Route::post('/addaboutaction',[admincontroller::class,'addaboutaction']);
Route::get('/viewabout',[admincontroller::class,'viewabout']);
Route::get('/editabout/{id}',[admincontroller::class,'editabout']);
Route::post('/editaboutaction/{id}',[admincontroller::class,'editaboutaction']);
Route::get('/deleteabout/{id}',[admincontroller::class,'deleteabout']);
Route::get('/viewuser',[admincontroller::class,'viewuser']);
Route::get('/userregistration',[admincontroller::class,'userregistration']);
Route::get('/viewpolicies',[admincontroller::class,'viewpolicies']);
Route::get('/viewpolicyholders',[admincontroller::class,'viewpolicyholders']);
Route::get('/newpolicy',[admincontroller::class,'newpolicy']);
Route::get('/approvedpolicyholders/{id}',[admincontroller::class,'approvedpolicyholders']);
Route::get('/declinedpolicyholders/{id}',[admincontroller::class,'declinedpolicyholders']);
Route::get('/viewtickets',[admincontroller::class,'viewtickets']);
Route::get('/changeact/{id}',[admincontroller::class,'changeact']);
Route::post('/changeaction/{id}',[admincontroller::class,'changeaction']);
Route::get('/viewprofile',[admincontroller::class,'viewprofile']);
Route::post('/adminloginaction',[adminController::class,'adminloginaction']);
Route::post('/viewprofileaction',[admincontroller::class,'viewprofileaction']);
// Route::get('/password',[admincontroller::class,'password']);
