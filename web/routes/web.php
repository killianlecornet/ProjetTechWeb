<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCRUDController;
use App\Models\User as User;

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

Route::get('/contact/{prenom}', function () {
    $prenom = request('prenom');
    return view('contact', [
        'prenom' => $prenom
    ]);
});

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@inscription');

Route::get('/index' , 'App\Http\Controllers\UsersController@index');

Route::get('/users/{id}', 'App\Http\Controllers\UsersController@show')->name('Show.User');

Route::get('/connexion' , 'App\Http\Controllers\ConnexionController@form');

Route::post('/connexion' , 'App\Http\Controllers\ConnexionController@connexion');

Route::get('/dashboard' , 'App\Http\Controllers\UserAccountController@dashboard');

Route::get('/signout' , 'App\Http\Controllers\UserAccountController@signout');

Route::get('/password_modification' , 'App\Http\Controllers\UserAccountController@form_password_modification' );

Route::post('/password_modification' , 'App\Http\Controllers\UserAccountController@form_password_modification' );

Route::resource('posts', PostCRUDController::class);

Route::post('/panier/ajouter', 'App\Http\Controllers\Cartcontroller@store')->name('cart.store');

Route::get('/email', 'App\Http\Controllers\EmailController@create');

Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');

Route::get('/videpanier', function (){
    Cart::destroy();
});

Route::get('/mon-panier', 'App\Http\Controllers\Cartcontroller@index')->name('cart.index');

Route::delete('/panier/{id}', 'App\Http\Controllers\Cartcontroller@destroy')->name('cart.destroy');