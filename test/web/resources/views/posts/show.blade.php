@extends('layout')

@section('contenu')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blog Post Form - Laravel 8 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>



    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Posts</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="http://127.0.0.1:8000/"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $post->title }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>description:</strong>

                {{ $post->description }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>price:</strong>

                {{ $post->price }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>image:</strong>

                <img src="{{ Storage::url($post->image) }}" height="75" width="75" alt="" />

            </div>

        </div>

    </div>
</body>
</html>
@endsection