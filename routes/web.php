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
    return view('login');
});

Route::get('home', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('jobs', function () {
    return view('jobs');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('profile1', function () {
    return view('profile1');
});

Route::get('company-jobs', function () {
    return view('company-jobs');
});

Route::get('company-profile', function () {
    return view('company-profile');
});

Route::get('homecaroline', function () {
    return view('homecaroline');
});

Route::get('newjob', function (){
    return view('newjob');
});

Route::get('newcompany', function (){
    return view('newcompany');
});

Route::get('confirmnewcompany', function (){
    return view('confirmnewcompany');
});

Route::get('confirmnewjob', function (){
    return view('confirmnewjob');
});

Route::get('nav', function (){
    return view('nav');
});

Route::get('test1', function(){
    return View::make('test1');
});

Route::get('phpinfo', function(){
    return phpinfo();
});

Route::get('studentsearch', function(){
    return studentsearch();
});

Route::get('test2', 'MasterController@test2');

Route::post('confirmnewjob', 'NewController@ConfirmNewJob');

Route::post('submitnewjob', 'NewController@SubmitNewJob');

Route::get('newstudent', function(){
    return View::make('newstudent');
});

Route::get('linkedinAuth/{firstName}/{lastName}/{headline}', 'MasterController@SuccessfulLogin');








