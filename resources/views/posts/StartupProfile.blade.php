@extends('layouts.Startupapp')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center ">
            <div class="panel panel-default">
                <div class="userprofile social ">
                    <h2 class=mx-auto my-0 text->Ibrahim Haveanidea</h2>
                    <div class="userpic"> 
                        <img src="https://i.imgur.com/AGUuIAH.jpg" alt="" class="rounded-circle img-fluid" height="215" width="215"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 pull-right">
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading" >
                    <h1 class="page-header small">Personal Details</h1>
                    <p class="page-subtitle small">Born: 16 August 1992 (age 26 years)</p>
                    <p class="page-subtitle small">Occupation: Indie Game Developer </p>
                    <p class="page-subtitle small">Education: Western Sydney University </p>
                </div>
            </div>
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading">
                    <div id="wrapper">
                        <a href="{{URL::asset('/posts/create')}}" class="btn btn-success" role="button" style="padding-left: 50px; padding-right: 50px"><i class="fa fa-plus-square" aria-hidden="true"></i> new projects</a>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h1 class="page-header small">Career Biography</h1>
                    <p class="page-subtitle small">Highlights:</p>
                    <div class="col-md-12">
                        <ul class="list-group">
                            <li class="list-group-item"><span class="fa fa-male"></span> Worked with 1000+ people</li>
                            <li class="list-group-item"><span class="fa fa-institution"></span> 60+ offices</li>
                            <li class="list-group-item"><span class="fa fa-user"></span> 50000+ satify customers</li>
                            <li class="list-group-item"><span class="fa fa-clock-o"></span> Work hours many and many still counting</li>
                            <li class="list-group-item"><span class="fa fa-heart"></span> Customer satisfaction for servics</li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 pull-left posttimeline">
            <div class="panel panel-default">
                <div class="col-md-12 commentsblock border-top">
                    <div class="mx-auto text-center"><br/><h1><p>Your Projects</p></h1></div>
                    @if(count($posts) > 0)
                    @foreach($posts as $post)
                    <div class="well">
                        <h3><a href="/test/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div><br>
                    @endforeach
                    {{$posts->links()}}
                    @else
                    <p>No Project found</p>
                    @endif

                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://i.imgur.com/9otqt4K.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="Project.html">Office Rent</a>
                            </h4>
                            <p class="card-text">Renting office space out to small businesses that need to setup meetings. </p>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-12 commentsblock border-top">
                    <div class="card h-100">
                        <a href="Profile.html"><img class="card-img-top" src="https://i.imgur.com/OxSKI1d.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="Project.html">Indie Game</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-12 commentsblock border-top">

                </div>
            </div>      
        </div>
    </div>
</div>
@endsection