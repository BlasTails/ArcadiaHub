@extends('layouts.Investorapp')
@section('content')
<div class="container">
	
	    <div class="card-body">
	        
	        	<div class="card card-inner">
            	    <div class="card-body">
                        <div class="mx-auto text-center"><h3>Top Start Ups and Funded</h3></div><hr/>
                        <div class="row">
                            
        	                <div class="col-md-4">
                                <p><img src="https://i.imgur.com/YRcOA8k.jpg" class="rounded-circle img-fluid"/></p>
                                <p><a href="Profile.html"><strong>Jasmine Startacompany</strong></a></p>
                                <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="col-md-4">
                                <p><img src="https://i.imgur.com/AGUuIAH.jpg" class="rounded-circle img-fluid"/></p>
                                <p><a href="Profile.html"><strong>Ibrahim Haveanidea</strong></a></p>
                                <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="col-md-4">
                                <p><img src="https://i.imgur.com/0ACuaNI.jpg" class="rounded-circle img-fluid"/></p>
                                <p><a href="Profile.html"><strong>Maria Marketer</strong></a></p>
                                <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        
                        <hr/>
                        <div class="mx-auto text-center"><h3>New and Rising</h3></div>
                        <div class="mx-auto text-center"><a href="{{URL::asset('/projects')}}" class="btn btn-primary" role="button" style="padding-left: 50px; padding-right: 50px"> All Ideas</a></div><hr/> 
            	        </div>
            	    </div>
	            </div>
                @if(count($users) > 0)
				
                @foreach($users as $user)
				@if($user->role_id == 1)
				<div class="card"><br>
                	<div class="row">
                    	<div class="col-md-4 col-sm-4">
						<img src="storage/profile_image/{{$user->profile_image}}" class="rounded-circle img-fluid" width="200" height="200"/>
                    	</div>
                    <div class="col-md-4 col-sm-4">
                        <h3><a href="user/{{$user->id}}">{{$user->name}}</a></h3>
                        <p class="card-text">{{$user->country}}</p>

                    </div>
                </div>
                <br>
        



				@endif 
                @endforeach
                {{--{{$user->links()}}--}}
				
                @else
                <div class="col-xl-12 ">
                    <h2>No posts found</h2>
                </div>
                @endif 
	    </div>
	
</div>
@endsection