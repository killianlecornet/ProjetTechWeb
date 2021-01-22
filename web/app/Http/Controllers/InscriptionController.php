<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User ;

class InscriptionController extends Controller
{
    public function formulaire() {
        return view('inscription');
    }


    public function inscription() {

        $result = request()->validate([
            'email'=>['required', 'email'],
            'name'=>['required'],
            'password'=>['required', 'confirmed','min:8'],
            'password_confirmation'=>['required']
        ]);
    
        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
        ]);
        return "your email is ". request('email');
    }
}
