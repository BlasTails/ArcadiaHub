@extends('layouts.Startupapp')
@section('content')
<div class="container">
    <div class="row">
    @foreach($details as $detail)
        <div class="col-md-12 text-center ">
            <div class="panel panel-default">
                <div class="userprofile social ">
                    <h2 class=mx-auto my-0 text->{{$detail->name }}</h2>
                    <div class="userpic"> 
                        <img src="storage/profile_image/{{$detail->profile_image}}" alt="Cinque Terre" class="rounded-circle" width="200" height="200"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 pull-right">
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="clearfix"></div>
            </div>
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading" >
                    <h1 class="page-header small">Personal Details</h1>
                    <p class="page-subtitle small">Country: {{$detail->country}}</p>
                    <p class="page-subtitle small">Location: {{$detail->address}} </p>
                </div>
            </div>
            <div class="panel panel-default" style="margin-bottom: 5px">
                <div class="panel-heading" >
                    <h1 class="page-header small">Profile Description </h1>
                    <p class="page-subtitle small">{!!$detail->user_details!!} </p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h1 class="page-header small">Contact</h1>
                    <p class="page-subtitle small">Email: {{$detail->email}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-8 col-sm-12 pull-left posttimeline">
            <div class="panel panel-default">
                <div class="c,arol-md-12">
                    <div class="mx-auto text-center"><br/><h1><p>Their Start Ups</p></h1></div>
                      
                </div>
            </div>
        </div>      
    </div>
</div>

@endsection