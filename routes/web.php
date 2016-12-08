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
    $client = new App\Client;
    $clients = $client->client_container;

    return view('index', ['clients' => $clients]);
});

Route::get('/details', function (){
    $clientObject = new App\Client;
    $clients = $clientObject->client_container;
    Request::flash();
    $id = Request::input('id');
    $data = [];
    $data['name'] = $clients[$id]['name'];
    $data['email'] = $clients[$id]['email'];
    return view('details', $data);
});

Route::post('/details', function (){
    return view('details', ['post' => true]);
});

Route::get('/add', function (){
    return view('cms');
});

Route::get('client/create', 'ClientController@create');
Route::post('client/create', 'ClientController@store');

Route::get('/found', function () {
    if(!Auth::check()){
        return redirect('/home');
    }
    return view('foundation');
});

Route::get('/prices', function () {
    return view('price');
});


Route::match(['get', 'post'],'/form', function(){
   $name = Request::input('email');
   $lang = Request::input('lang');
   return view('form', ['email' => $name, 'language' => $lang]);
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


//Autenticacion
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/logout', function(){
    Auth::logout();
    return redirect('/home');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
