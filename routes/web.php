<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', 'App\Http\Controllers\DashboardController@connexion');
Route::post('/admin/dashboard/home', 'App\Http\Controllers\DashboardController@dashboardHome');

Route::get('/contact', 'App\Http\Controllers\WebsiteController@contact');
Route::post('/contact', 'App\Http\Controllers\WebsiteController@postContact'); // need to set up with sendinblue

//For test
Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'nom' => 'Durand',
        'email' => 'durand@chezlui.com',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
    ]);
});
