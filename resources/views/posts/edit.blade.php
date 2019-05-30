@extends('layouts.Startupapp')
@section('content')
<div class="container">
    <div calss="row">
        <div class="col-md-12 text-center">
            <h1>Edit Idea</h1>
        </div>
    </div><hr>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-left" style="padding-top:10px">
            <h4>{{Form::label('title','Idea Title')}}</h4>
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder'=> '  Title'])}}
        </div>
        <div class="col-md-2"></div>
    </div>
    
    <div class="row" >
        <div class="col-md-2"></div>
        <div class="col-md-8 text-left" style="padding-top:10px; margin-bottom:22px">
            <h4>Cover Image</h4>
            {{Form::file('cover_image')}}
        </div>
        <div class="col-md-2"></div>
    </div>
   
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-left" style="padding-top:10px">
            <h4>{{Form::label('description','Description Heading')}}</h4>
            {{Form::text('description', $post->description, ['class' => 'form-control', 'placeholder'=> ' Description Heading '])}}
        </div>
        <div class="col-md-2"></div>
    </div>
   
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-left" style="padding-top:10px">
            <h4>{{Form::label('body','Description')}}</h4>
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> ' Description Body'])}}
        </div>
        <div class="col-md-2"></div>
    </div>
    
    
    <div class="row">
        <div class="col-sm-6 text-center" style="padding-top: 15px">
            <a href="/test/public/posts/{{$post->id}}" class="btn btn-secondary" role="button" >Cancel</a>       
        </div>
        
        
        <div class="col-sm-6 text-center" style="padding-top: 15px">
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}    
        </div>
    </div><br>
    {!! Form::close() !!}

</div>
@endsection
