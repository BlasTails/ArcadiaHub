@extends('layouts.Startupapp')
@section('content')
<div class="container">
    <div class="row" style="padding-bottom:15px">
        <div class="col-sm-8">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="col-sm-2">
            <a href="/test/public/posts/{{$post->id}}/edit" style="padding-top: 5px ;padding-bottom: 5px" class="btn btn-primary" role="button"><i class="fa fa-wrench" aria-hidden="true"></i> edit project</a>
        </div>
        <div class="col-sm-2" >
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            <a href="Profile.html" style="padding-top: 5px ;padding-bottom: 5px" class="btn btn-danger" data-toggle="modal" data-target="#myModal"role="button"><i class="fa fa-trash" aria-hidden="true"></i> delete project</a>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">WARNING</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>Are you sure you want to delete this Project?</p>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        </div>
                    </div>
                </div>
            </div>                  
        </div>
    </div>
    <div class="col-xl-12 text-center ">
        <div class="panel panel-default text-left">
            <div class="projectpic">
            </div>
            <hr>
            <div class="descriptionheading text-left">
                <h3> Description Heading </h3>
            </div>
            <hr>
            <div clas="container" style="text-align: left;height: 200px;">
                {!!$post->body!!}
            </div>
            <small>Written on {{$post->created_at}}</small>
        </div>
    </div>
</div>

{!!Form::close()!!}
@endsection