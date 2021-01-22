<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    //

    public function form(){
        return view('Connexion/connexion');
    }

    public function connexion(){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if($result){
            flash('You are well connected')->success();
            return redirect('/dashboard');
        }
        else{
            flash('Wrong identifiant !')->error();
            return back();
        }
        
    }
}
