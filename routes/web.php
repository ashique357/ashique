<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});



//test route for nid_verify


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nid', 'HomeController@nid_view')->name('nid');
Route::post('/nid', 'HomeController@nid_post')->name('nid.post');
//Route::get('/admin', 'AdminController@index');
//Route::get('/super-admin', 'SuperAdminController@index');

//admin routes
Route::post('/action','AdminPageController@get_action');
Route::prefix('admin')->group(function() {
  Route::get('/login',
  'Auth\AdminLoginController@index')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
  Route::get('/register','Auth\AdminLoginController@register_form')->name('admin.register');
  Route::post('/register','Auth\AdminLoginController@create')->name('admin.register.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/list/{id}','AdminPageController@display_info');
  Route::get('/list','AdminPageController@index')->name('list');




});

//Super Admin routes

Route::prefix('superadmin')->group(function() {
 Route::get('/login',
 'Auth\SuperAdminLoginController@index')->name('SuperAdmin.login');
 Route::post('/login', 'Auth\SuperAdminLoginController@login')->name('SuperAdmin.login.submit');
 Route::get('logout/', 'Auth\SuperAdminLoginController@logout')->name('SuperAdmin.logout');
 Route::get('/register','Auth\SuperAdminLoginController@register_form')->name('SuperAdmin.register');
 Route::post('/register','Auth\SuperAdminLoginController@create')->name('SuperAdmin.register.submit');
 Route::get('/', 'SuperAdminController@index')->name('SuperAdmin.dashboard');
 Route::get('/admin/list/{id}/marriage-list', 'SuperAdminController@admin_marriage');
 Route::get('/admin/list/{id}/marriage-list/{approved}','SuperAdminController@marriage_display_info');
 Route::get('/admin/list', 'SuperAdminController@info_view');

});

//User routes
Route::get('/get-married/step-1','MarriageController@CreateStep_1')->name('marriage.form.step1');
Route::post('/get-married/step-1','MarriageController@PostCreateStep_1')->name('marriage.form.step1.submit');
Route::get('/get-married/step-2','MarriageController@CreateStep_2')->name('marriage.form.step2');
Route::post('/get-married/step-2','MarriageController@PostCreateStep_2')->name('marriage.form.step2.submit');
Route::get('/get-married/step-3','MarriageController@CreateStep_3')->name('marriage.form.step3');
Route::post('/get-married/step-3','MarriageController@PostCreateStep_3')->name('marriage.form.step3.submit');
Route::get('/get-married/step-4','MarriageController@CreateStep_4')->name('marriage.form.step4');
Route::post('/get-married/step-4','MarriageController@PostCreateStep_4')->name('marriage.form.step4.submit');
