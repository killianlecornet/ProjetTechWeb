<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function dashboard(){
        if(auth()->check()){
            return view('Useraccount/dashboard');
        }


        flash('You have be connected to access to this page')->error();
        return back();
        
    }

    public function signout(){
        auth()->logout();

        return redirect('/connexion');
    }

    public function form_password_modification(){
        return view('UserAccount');
    }
}
