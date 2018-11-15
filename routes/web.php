<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'revalidate'], function()
{
    // Routes that you want to revalidate go in here
    Route::get('/home', 'HomeController@index')->name('home');
     Route::post('/login','Auth\LoginController@login');
    //Route::post('.','Admin\LoginController@login');
});

//Route::post('/regiscustomer','RegisterController@index');



Route::get('/adminofcavs',function(){
   return view('admin.register'); 
});

Route::get('admin/home','AdminController@index')->name('admin.admin');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/adminregister','Admin\RegisterController@store');

                    

Route::get('/authuser','getController@create');

Route::get('admin/equipment','AdminController@what')->name('admin.adminfarm');
Route::post('/insertequip','adminfarmController@store');

Route::get('admin/medicine','AdminController@addmedicine')->name('admin.adminmed');
Route::post('/insertmedicine','MedicineController@store');

Route::get('admin/viewmed','adminmedviewController@index')->name('admin.viewmed');
Route::get('admin/viewfarm','adminfarmviewController@index')->name('admin.viewfarm');

Route::get('admin/delete/{id}','adminfarmviewController@destroy')->name('admin.viewfarm');
Route::get('admin/meddelete/{id}','adminmedviewController@destroy')->name('admin.viewmed');

Route::get('admin/edit/{id}','medupdateController@show');
Route::post('/edit/{id}','medupdateController@update');
Route::get('admin/edit/{id}','farmupdateController@show');
Route::post('/edit/{id}','farmupdateController@update');

Route::get('admin/doctor','AdminController@adddoctor')->name('admin.admindoctor');
Route::post('/insertdoctor','DoctorController@store');
Route::get('admin/viewdoctor','DoctorController@doctorview')->name('admin.viewdoctor');
Route::get('admin/doctoredit/{id}','DoctorController@viewdoctorupdate');
Route::post('doctoredit/{id}','DoctorController@updatedoctor');
Route::get('admin/doctordelete/{id}','DoctorController@destroy');

Route::get('admin/customerinfo','getController@getcustomer');

Route::get('admin/dashboard','getController@adminhomepage');
Route::get('admin/approve','getController@approveorderpage');
Route::get('admin/approvemedicine/{id}','getController@insertintosales');
Route::get('admin/deleteorders/{id}','getController@deletefrom');


Route::post('sendmessage/{id}','mailController@send');
Route::get('admin/sendmail/{id}','mailController@email');


Route::get('admin/getorders','getController@getOrder');
Route::get('admin/getsales','getController@getSales');

Route::get('admin/report','getController@generate');
Route::get('admin/appointment','DoctorController@getAppointments');






Route::get('customerfarmview','customerfarmviewController@index');
Route::get('/buyequipment/{id}','customerfarmviewController@orderpage');

Route::get('customermedview','customermedviewController@index');
Route::get('/buymedicine/{id}','customermedviewController@orderpage');

Route::post('orderequipment/{id}','farmorderController@addorder');
Route::post('ordermedicine/{id}','medorderController@addorder');

Route::get('customerdoctorview','customerdoctorviewController@index');
Route::get('bookdoctor/{id}','appointmentController@viewappointment');
Route::post('bookappointment/{id}','appointmentController@addappointment');

Route::get('help','helpcontroller@index');
Route::get('dashboard','showDashboard@index');









Route::get('/log','LoginController@index');

Route::post('/logg','LoginController@login');









