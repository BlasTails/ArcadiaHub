@extends('layouts.Startupapp')
@section('content')

<div class="container">
    <div class="row" style="padding-bottom:15px">
        <h1>Projects</h1>
        <div class="row" style="padding-top:50px">
            @if(count($posts) > 0)
            @foreach($posts as $post)
            <div class="card"><br>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img class="img-thumbnail" src="storage/cover_images/{{$post->cover_image}}" width="1000" height="200">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <p class="card-text">{{$post->description}}</p>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
                <br>
            </div>
            <br> 
            @endforeach
            
            <div class="card" style="margin-top:10px; margin-bottom:10px; padding-top:10px">
            {{$posts->links()}}
            </div>

            @else
            <div class="col-xl-12 ">
                <h2>No posts found</h2>
            </div>
            @endif

        </div>

    </div>
</div>


@endsection