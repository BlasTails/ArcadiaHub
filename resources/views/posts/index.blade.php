@extends('layouts.Startupapp')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 1)
@foreach($posts as $post)
<div class="well">
    <h3><a href="/test/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}}</small>
</div>
@endforeach
@else
<p>No Startups found</p>
@endif
@endsection