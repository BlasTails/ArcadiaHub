@extends('layouts.Startupapp')
@section('content')


<div class="container">

        {!! Form::open(['action' => 'DetailsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="mx-auto text-center"><br/><h1><p> Account Details </p></h1></div>

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
                        {{Form::text('address', '', ['class' => 'form-control', 'placeholder'=> ' Address'])}}
                    </div>
                    <div class="col-md-2"></div>
                </div>


                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-left" style="padding-top:10px">
                        <h4>{{Form::label('country','Country')}}</h4>
                        {{Form::text('country', '', ['class' => 'form-control', 'placeholder'=> ' Country'])}}
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-left" style="padding-top:10px">
                        <h4>{{Form::label('user_details','User Details')}}</h4>
                        {{Form::textarea('user_details', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> ' Description Body'])}}
                    </div>
                    <div class="col-md-2"></div>
                </div>


                <div class="row">
                    <div class="col-sm-6 text-center" style="padding-top: 15px">
                        {{Form::submit('Next',['class'=>'btn btn-success'])}}    
                    </div>
                </div><br>
                {!! Form::close() !!}
            </div>
        </div>      

            </div>      
</div>


@endsection