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
    return view('welcome'); //primary
});
Route::view('/good', 'good'); // view method
Route::get('/test', function(){
	return 'Test'; // return text
});
Route::match(['get', 'post'], '/dashboard', function(){
	//match call method type
})->name('dashboard');
Route::any('/contact-us', function(){
	return 'contact us'; //any call method type
});
Route::redirect('/about-us', '/contact-us'); //redirect
Route::get('/users/{userId}/photofolios/{pId}', function($userId, $pId){
	return 'User: '.$userId.', Photofolio: '.$pId;  //route params
});
Route::get('users/{name?}', function($name = 'Best'){
    return $name; //optional parameter
});
Route::middleware('checkAge')->group(function() {
    Route::get('/check-users/{age}', function ($age) {
        //middleware route grouping
    });
});
Route::get('check-users/{age}', function($age){
    return 'you are above 20!';
})->middleware('checkAge'); //use middleware
