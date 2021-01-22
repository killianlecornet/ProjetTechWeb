@extends('layout')

@section('contenu')
    @foreach($users as $user)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <a href="{{ route('Show.profil', ['email' => $user->email]) }}" class="card-text">{{$user->email}}</a>
            </div>
        </div>
        <br>
    @endforeach
@endsection