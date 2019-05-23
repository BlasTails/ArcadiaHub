@extends('layouts.Startupapp')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center ">
            <div class="panel panel-default">
                <div class="userprofile social ">
                    <h2 class=mx-auto my-0 text->{{ Auth::user()->name }} </h2>
                    <div class="userpic"> 
                        <img src="https://i.imgur.com/AGUuIAH.jpg" alt="" class="rounded-circle img-fluid" height="215" width="215"> 
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-md-12">
            <div class="panel panel-default">
                
                    <div class="mx-auto text-center"><br/><h1><p> Settings </p></h1></div>
                   
                          
                       
                
            </div>
        </div>      
    </div>
</div>

@endsection