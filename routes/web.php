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

Route::resources([
     'cms_content' => 'UserController',
     'users' => 'CmsContentController',
     'roles' => 'RoleController',
     'permissions' => 'PermissionController',
     'posts' => 'PostController',
     'master_class' => 'MasterClassController',
     'academic_enquiries' => 'AcademicEnquiryController@make',
    
    'cms_content' => 'CmsContentController',
    'site_setting' => 'SiteSettingController',
    'photos' => 'PhotosController'
]);

Route::resource('albums', 'AlbumsController');

Route::get('photos/create/{album_id}', 'PhotosController@create');
Route::get('galleries', 'AlbumsController@galleries');


Route::get('gallery_images/{album_id}', 'AlbumsController@albums_photos')->name('albums.albums_photos');

//Route::get('albums_photos/{album_id}', 'AlbumsController@albums_photos');

Auth::routes();



//Route::post('albums/create', '');
//Route::get('/albums', 'AlbumsController@index');
//Route::get('/albums/create', 'AlbumsController@create');
//Route::post('/albums/store', 'AlbumsController@store');



Route::get('home', 'HomeController@index')->name('home');

Route::get('admission', 'AcademicEnquiryController@make');
Route::post('admission', ['as'=>'admission.store','uses'=>'AcademicEnquiryController@storefront']);

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/addstudent', 'StudentController@studentOperations');
    Route::get('admin/studentsList', 'StudentController@viewGrid');
    Route::get('admin/notices', 'NoticesController@index');
});

Route::get('about-us', function () {
    return view('front/aboutus');
});

Route::get('events', function () {
    return view('front/events');
});

