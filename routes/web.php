<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/found', function () {
    return view('foundation');
});

Route::get('/prices', function () {
    return view('price');
});

Route::match(['get', 'post'],'/form', function(){
   return view('form');
});

//Route::post('/form', function (){
//    return view('form');
//});



Route::get('greet/{name}', function ($name){
    return 'Hola ' . $name;
});

Route::get('Home', function (){
    return Redirect::to('/');
});

Route::get('user/profile', array('as' => 'prof'), function (){
    return 'Ruta Nombrada';
});
Route::get('get/named_url', function (){
    return URL::route('prof');
});


Route::get('articles', "ArticlesController@index");
//Route::controller('articles', 'ArticlesController'); // No exist in v5.3
Route::get('create_user', ['uses' => 'ArticlesController@create', 'as' => 'create']);

Route::resource('users', 'UsersController', ['names' => [
    'create' => 'users.build'
]]);