@extends('layouts.Startupapp')
@section('content')
<div class="container">
    <div calss="row">
        <div class="col-md-6">
            <h1>New Project</h1>
        </div>
    </div>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="row" style="padding-top: 25px">
        <div class="col-md-3 text-left" style="padding-top:10px">
            <h4>{{Form::label('title','Project Title')}}</h4>
        </div>
        <div class="col-md-4 text-left">
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=> ' Project Title'])}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label style="padding-top: 15px" for="Project_Title"><h4>Project Picture</h4></label>
        </div>
        <div class="form-group" style="margin-left: 8px; margin-top: 5px" >
            {{Form::file('cover_image')}}
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding-top: 15px">
            <label for="Category"><h4>Category</h4></label>
        </div>
        <div class="col-md-4 text-left">
            <select style="margin-top: 15px" class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
    </div>
    <div class="row" style="padding-top: 25px">
        <div class="col-md-3">
            <label style="padding-top: 15px" for="Project_Title"><h4>Description Heading</h4></label>
        </div>
        <div class="col-md-4 text-left">
            <input style="margin: inherit" type="text" class="form-control" id="usr">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding-top: 15px">
            <h4>{{Form::label('body','Description')}}</h4>
        </div>
        <div class="col-lg-8 text-left" style="padding-top: 15px">
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> ' Description Body'])}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 text-center" style="padding-top: 15px">
            <a href="{{URL::asset('/posts')}}" class="btn btn-warning" role="button" >Cancel</a>       
        </div>
        <div class="col-sm-6 text-center" style="padding-top: 15px">
            {{Form::submit('Submit',['class'=>'btn btn-success'])}}    
        </div>
    </div><br>
    {!! Form::close() !!}

</div>
@endsection
