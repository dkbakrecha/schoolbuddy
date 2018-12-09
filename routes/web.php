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

//Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::resource('master_class', 'MasterClassController');

Route::resource('academic_enquiries', 'AcademicEnquiryController@make');

Route::resource('cms_content', 'CmsContentController');
Route::resource('site_setting', 'SiteSettingController');
Route::get('home', 'HomeController@index')->name('home');

Route::get('admission', 'AcademicEnquiryController@make');
Route::post('admission', ['as'=>'admission.store','uses'=>'AcademicEnquiryController@storefront']);

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/students', 'StudentController@index');
    Route::get('admin/notices', 'NoticesController@index');
});

Route::get('about-us', function () {
    return view('front/aboutus');
});

Route::get('events', function () {
    return view('front/events');
});

Route::get('galleries', function () {
    return view('front/galleries');
});