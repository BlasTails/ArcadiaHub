@extends('layouts.Startupapp')
@section('content')

<div class="container">
    
    {!! Form::open(['action' => ['DetailsController@update', $detail->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    
    <div class="row">
        <div class="col-md-12 text-center ">
            <div class="panel panel-default">
                <div class="userprofile social ">
                    <h2 class=mx-auto my-0 text->{{ Auth::user()->name }} </h2>
                </div>
            </div>
        </div>
       
        <div class="col-md-12">
            <div class="panel panel-default">
                
                    <div class="mx-auto text-center"><br/><h1><p> Settings </p></h1></div>
                   
                
                    <div class="row" >
                        <div class="col-md-2"></div>
                        <div class="col-md-8 text-left" style="padding-top:10px; margin-bottom:22px">
                            <h4>Profile Image</h4>
                            {{Form::file('profile_image')}}
                        </div>
                        <div class="col-md-2"></div>
                    </div>


                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 text-left">
                            <h4>{{Form::label('address','Address')}}</h4>
                            {{Form::text('address', $detail->address, ['class' => 'form-control', 'placeholder'=> ' Address'])}}
                        </div>
                        <div class="col-md-2"></div>
                    </div>


                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 text-left" style="padding-top:10px">
                            <h4>{{Form::label('country','Country')}}</h4>
                            {{Form::text('country', $detail->country, ['class' => 'form-control', 'placeholder'=> ' Country'])}}
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 text-left" style="padding-top:10px">
                            <h4>{{Form::label('user_details','User Details')}}</h4>
                            {{Form::textarea('user_detail', $detail->user_details, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> ' Description Body'])}}
                        </div>
                        <div class="col-md-2"></div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 text-center" style="padding-top: 15px">
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}    
                        </div>
                    </div><br>
                    {!! Form::close() !!}

                
                
            </div>
        </div>      
    </div>
</div>

@endsection