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
    $patient = DB::table('Patient')->get();
    return view('welcome', compact('patient'));
});

Route::get('/insert', function () {
    return view('insert');
});

Route::post('/registered', 'Controller@insert');

Route::get('/relationship', function() {
    $treatment = App\Patient::find(2)->treatment;
    return view('relationship', compact('treatment'));
});


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');