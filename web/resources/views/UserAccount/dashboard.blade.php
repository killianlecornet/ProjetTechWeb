@extends('layout')

@section('contenu')
    <h1>Welcome {{$user->name}}</h1>
    
    <h3>Write your post</h3>
    <form action="/new_post" method="post">
        {{csrf_field()}}

        <input type="text" id="inputTitle" name="title" value={{ old('title') }}>

        <input type="text" id="inputContent" name="content" value={{ old('content') }}>
        
        <input type="submit" value="Valider">
    </form>

    <ul>
        @foreach($user->$posts as $post)
            <li>
                <span>{{$post->created_at}}</span>
                <h4>{{$post->title}}</h4>
                <p>{{$post->content}}</p>
            </li>
        @endforeach
    </ul>
@endsection