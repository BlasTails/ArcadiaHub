@extends('layouts.Startupapp')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center ">
            <div class="panel panel-default">
                <div class="userprofile social ">
                    <h2 class=mx-auto my-0 text->{{ Auth::user()->name }} </h2>
                    
                    @foreach ($users as $user)
                    <div class="userpic"> 
                        <img src="storage/profile_image/{{$user->profile_image}}" alt="Cinque Terre" class="rounded-circle" width="200" height="200"> 
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 pull-right">
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading">
                <h1 class="page-header small"style="text-align:center">Start a new Idea</h1>
                    <div id="wrapper">
                        <a href="{{URL::asset('/posts/create')}}" class="btn btn-primary" role="button" style="padding-left:50px; padding-right:50px;"><i class="fa fa-plus-square" aria-hidden="true"></i> New Idea</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading" >
                    <h1 class="page-header small">Personal Details</h1>
                    @foreach ($users as $user)
                    <p class="page-subtitle small">Country: {{$user->country}}</p>
                    <p class="page-subtitle small">Location: {{$user->address}} </p>
                    @endforeach
                </div>
            </div>
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading" >
                    <h1 class="page-header small">Profile Description </h1>
                    @foreach ($users as $user)
                    <p class="page-subtitle small">{!!$user->user_details!!} </p>
                    @endforeach
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h1 class="page-header small">Contact</h1>
                    @foreach ($users as $user)
                    <p class="page-subtitle small">Email: {{$user->email}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 pull-left posttimeline">
            <div class="panel panel-default">
                <div class="c,arol-md-12">
                    <div class="mx-auto text-center"><br/><h1><p>Your Start Ups</p></h1></div>
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                        <div class="card h-100">
                            <img class="card-img-top" src="storage/cover_images/{{$post->cover_image}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                </h4>
                                <p class="card-text">{{$post->description}}</p>
                                <small>Written on {{$post->created_at}}</small>
                            </div>
                            
                        </div>
                        <br>
                        
                        @endforeach
                    {{$posts->links()}}  
                    @else
                        <hr>
                        <h5 style="text-align: center; margin-bottom: 25px;">You have no new ideas</h5>
                        <hr>
                    @endif
                    
                          
                       
                </div>
            </div>
        </div>      
    </div>
</div>

@endsection