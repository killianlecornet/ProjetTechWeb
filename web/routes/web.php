<?php

use Illuminate\Support\Facades\Route;
use App\Models\User as User ;

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



Route::view('/', 'inscription');

ROute::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){
    Route::get('/password_modification', 'App\Http\Controllers\UserAccountController@form_password_modification');

    Route::post('/password_modification', 'App\Http\Controllers\UserAccountController@password_modification');

    Route::get('/dashboard', 'App\Http\Controllers\UserAccountController@dashboard');

    Route::post('new_post','App\Http\Controllers\PostController@new_post');

    Route::get('/signout', 'App\Http\Controllers\UserAccountController@signout');

    Route::post('/{email}/follow','App\Http\Controllers\usersController@followings');
    
    Route::delete('/{email}/follow','App\Http\Controllers\usersController@unfollow');
});

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire' );

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@inscription');

// Route::get('/users/index', 'App\Http\Controllers\UsersController@index' );

// Route::get('/users/{id}', 'App\Http\Controllers\UsersController@show')->name('Show.User');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@form');

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connexion');

// Route::get('/{email}', 'App\Http\Controllers\UsersController@profil')->name('Show.profil');

