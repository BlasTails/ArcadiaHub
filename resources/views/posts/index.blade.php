@extends('layouts.Startupapp')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 1)
@foreach($posts as $post)
<div class="well">
    <h3><a href="/blog/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}}</small>
</div>
@endforeach
@else
<p>No Project found</p>
@endif
@endsection