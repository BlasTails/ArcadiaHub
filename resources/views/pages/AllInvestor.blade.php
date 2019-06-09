@extends('layouts.Startupapp')
@section('content')
<div class="container">
    <div class="row" style="padding-bottom:15px">
        <h1>Investors</h1>
	    <div class="card-body">
                @if(count($users) > 0)
                @foreach($users as $user)
				@if($user->role_id == 2)
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
                @endif 
	    </div>
    </div>	
</div>
@endsection