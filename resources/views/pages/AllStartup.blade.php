@extends('layouts.Investorapp')
@section('content')
<body class="hm-gradient">
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Startup Employees
            <small></small>
    </h1>
    
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{URL::asset('/dashboard')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{URL::asset('/AllInvestor')}}">Investors</a>
    </li>
    <li class="breadcrumb-item active">
            <a href="{{URL::asset('/AllStartup')}}">Startup Employees</a>
    </li>
    <li class="breadcrumb-item">
            <a href="{{URL::asset('/projects')}}">Startups</a>
    </li>
    </ol>

    <div class="row" style="padding-bottom:15px">
        <!--<h1>Start Ups</h1>-->
        <!--<br/><div class="mx-auto text-center"><h2 class=mx-auto my-0 text->Select Below:</h2></div><br/>-->
	    <div class="card-body">
                {{--@if(count($users) > 0)
                @foreach($users as $user)
				@if($user->role_id == 1)
				<div class="card">
                	<div class="row">
                    	<div class="col-md-2 col-sm-2">
						    <img src="storage/profile_image/{{$user->profile_image}}" class="rounded-circle img-fluid" width="1000" height="200"/>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h3><a href="detail/{{$user->user_id}}">{{$user->name}}</a></h3>
                            <p class="card-text">{{$user->country}}</p>
                        </div>
                    </div>
                </div>
                <br>
				@endif 
                @endforeach
                @else
                <div class="col-xl-12 ">
                    <h2>No posts found</h2>
                </div>
                @endif --}}

                <div class="row" >

                        @if(count($users) > 0)
                        @foreach($users as $user)
                        @if($user->role_id == 1)
                        <!--<div class="card">
                            <div class="row">
                                <div class="col-md-2 col-sm-2" >-->
                                    <!--<img src="storage/profile_image/{{--{{$user->profile_image}}--}}" class="rounded-circle img-fluid" width="1000" height="200"/>-->
                                    <!--<img src="storage/profile_image/{{--{{$user->profile_image}}--}}" class="rounded" width="100%" height="150"/>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <h3><a href="detail/{{--{{$user->user_id}}">{{$user->name}}</a></h3>
                                    <p class="card-text">{{$user->country}}--}}</p>
                                </div>
                            </div>
                        </div>-->
        
                        <div class="col-sm-3" style="padding-bottom:3%" >
                            <div class="card h-100 text-center" width="100">
                              <img class="card-img-top" src="storage/profile_image/{{$user->profile_image}}" alt=""  height="190">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center"><a href="detail/{{$user->user_id}}">{{$user->name}}</a></h5>
                                <hr>
                                <h6 class="card-price text-center" style="padding-bottom: 10%"><small>Location: {{$user->country}}</small></h6>
                              </div>
                              <div class="card-footer">
                                <a href="detail/{{$user->user_id}}" class="float-center btn text-white btn-danger"> View</a>
                              </div>
                            </div>
                        </div>
        
                        <br>
                        <br>
                        @endif
                        @endforeach
                        @else
                        <div class="col-xl-12 ">
                            <h2>No posts found</h2>
                        </div>
                        @endif
        
                    </div>

	    </div>
    </div>	
</div>
</body>
@endsection