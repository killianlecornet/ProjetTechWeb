@extends('layout')

@section('contenu')

    <form action="/inscription" method="post">
        {{ csrf_field() }}
        <input type="email" name="email" placeholder="Email" value = {{ old('email') }}>
        @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif
        <input type="tring" name="name">
        @if($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <input type="password" name="password" placeholder="Password">
        @if($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif
        <input type="password" name="password_confirmation" placeholder="Confirmation_password">
        @if($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
        @endif
        <input type="submit" value="Valider">
    
    </form>
@endsection