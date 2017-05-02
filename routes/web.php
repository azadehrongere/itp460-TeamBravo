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
    if(Session::get('signedIn') == true){
        return view('profile');
    }else{
        return Redirect('home');
    }
});

Route::get('company-profile', function () {
    return view('company-profile');
});

Route::get('newjob', function (){
    return view('newjob');
});

Route::get('newcompany', function (){
    return view('newcompany');
});

Route::post('submitnewcompany', 'MasterController@submitnewcompany');

Route::get('confirmnewjob', function (){
    if(Session::get('company') == true){
        return view('confirmnewjob');
    }else{
        return Redirect('home');
    }
});

Route::get('nav', function (){
    return view('nav');
});

Route::get('studentsearch', function(){
    if(Session::get('company') == true){
        return view('studentsearch');
    }else{
        return Redirect('home');
    }
});

Route::get('test', function(){
    return view('test');
});

Route::get('test1', function(){
    return View::make('test1');
});

Route::get('phpinfo', function(){
    return phpinfo();
});

Route::get('404', function(){
    return '404'();
});

Route::get('test2', 'MasterController@test2');

Route::post('confirmnewjob', 'NewController@ConfirmNewJob');

Route::post('submitnewjob', 'NewController@SubmitNewJob');

Route::post('addFavorite', 'MasterController@addFavorite');

Route::post('submitedits', 'ProfileController@submitedits');

Route::get('editprofile', function(){
    if(Session::get('signedIn') == true){
        return view('editprofile');
    }else{
        return Redirect('home');
    }
});

Route::get('linkedinAuth/{firstName}/{lastName}/{headline}/{url}', 'LinkedInSuccessController@SuccessfulLogin');



