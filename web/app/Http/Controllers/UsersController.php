<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Post as Post;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
    
        return view('Users/index', [
            'users' => $users
        ]);
    }

    public function show(int $id){
        $user = User::all()->where('id', $id)->first();
        
        return view('Users/show', [
            'user' => $user
        ]);

    }

    public function profil(){
        $email = request('email');
        $user = User::where('email', $email)->firstOrFail();
        if($user == auth()->user()){
            return redirect('/dashboard');
        }
        //$posts = Post::where('user_id', $user->id)->latest()->get();
        $posts = $user->posts;

        return view('Users/profil', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function followings(){

        $follower = auth()->user();
        $following = User::where('email', request('email'))->firstOrFail();

        $follower->followings()->attach($following);

        flash("You are now a  $following->name's follower")->success();

        return back();
    }

    public function unfollow(){
        $follower = auth()->user();
        $following = User::where('email', request('email'))->firstOrFail();

        $follower->followings()->detach($following);

        flash("You are now not a  $following->name's follower")->success();

        return back();
    }
}
