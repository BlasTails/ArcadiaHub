@extends('layouts.Startupapp')
@section('content')

<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Investors
        <small></small>
    </h1>
    
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{URL::asset('/dashboard')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{URL::asset('/AllInvestor')}}">Investors</a>
    </li>
    <li class="breadcrumb-item">
            <a href="{{URL::asset('/AllStartup')}}">Startup Employees</a>
    </li>
    <li class="breadcrumb-item">
            <a href="{{URL::asset('/projects')}}">Projects</a>
    </li>
    </ol>

    <div class="row" >

        
        
        <!--<h1>Investors</h1>-->
        <br/><div class="mx-auto text-center"><h2 class=mx-auto my-0 text->Select Below:</h2></div><br/>
	    <div class="card-body">
                {{--@if(count($users) > 0)
                @foreach($users as $user)
				@if($user->role_id == 2)--}}
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
                </div>
                <br>-->
				{{--@endif
                @endforeach
                @else--}}
                <!--<div class="col-xl-12 ">
                    <h2>No posts found</h2>
                </div>-->
                {{--@endif--}} 

            <div class="row" >

                @if(count($users) > 0)
                @foreach($users as $user)
				@if($user->role_id == 2)
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

@endsection

<!--<div class="col-sm-3">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="https://i.imgur.com/oE2x1tv.jpg" alt="">
      <div class="card-body">
        <h5 class="card-title text-muted text-uppercase text-center">View some Startup projects</h5>
        <hr>
        <h6 class="card-price text-center" style="padding-bottom: 10%">See whats out there</h6>-->
        
        <!--<ul class="fa-ul">
          <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Unlimited Users</strong></li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>150GB Storage</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Public Projects</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Private Projects</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated Phone Support</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Monthly Status Reports</li>
        </ul>-->
      <!--</div>
      <div class="card-footer">
        <a href="{{--{{URL::asset('/projects')}}--}}" class="float-right btn text-white btn-danger"> Display Projects</a>
      </div>
    </div>
  </div>-->