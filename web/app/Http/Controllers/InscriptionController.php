<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class InscriptionController extends Controller
{
    public function formulaire() {
        return view('inscription');
    
    }

    public function inscription() {
        request()->validate([
            // Email doit etre obligatoire et au format d'un email
            'email' =>['required' , 'email '],
            //name doit etre obligatoire
            'name' =>['required'],
            // password doir etre obligatoire, doit etre egal au password confirmation, doit faire minimum 8 caractere
            'password' =>['required' , 'confirmed' , 'min:8'],
            //password_confirmation doir etre obligatoire
             'password_confirmation' =>['required'],
        ]);
    
    
        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
        ]);
        return " your email is " . request('email');
    }

}
