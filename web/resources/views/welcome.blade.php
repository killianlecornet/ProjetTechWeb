@extends('layout')

@section('contenu')

@if (session('success'))
    <div class="alert alert-success">
        {{ sessionc('success') }}
    </div>
@endif
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
  @php

     $posts = DB::select('SELECT * FROM posts');
  @endphp
 
  <div class="row mb-2">
    @foreach ($posts as $post)
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-3 text-success">{{ $post->title }}</strong>
            <p class="mb-auto text-muted">{{ $post->description }}</p>
            <strong class="mb-auto font-weight-normal text-secondary">{{ $post->price }}</strong>
            <a class="btn btn-warning" href="{{ route('posts.show',$post->id) }}">Show</a>
          </div>
          
          <div class="col-auto d-none d-lg-block">
            <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="" />
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection