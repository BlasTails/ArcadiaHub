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
                <div class="mx-auto text-center"><br/><h1><p> Account Datails </p></h1></div>
                {!! Form::open(['action' => 'RoleController@store','PostController@store', 'method' => 'POST']) !!}
                <div class="row" >
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-left" style="padding-top:10px; margin-bottom:22px">
                        <h4>Profile Image</h4>
                        {{Form::file('cover_image')}}
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row" >
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-left" style="padding-top:10px; ">

                        <h4>{{ Form::label('account','Account Type') }}</h4>
                        <div class="row" >
                            <div class="col-md-2 " style=" margin-bottom:22px">
                                {{ Form::radio('account', '1') }} startup
                            </div>
                            <div class="col-md-2 text-left" style=" margin-bottom:22px">
                                {{ Form::radio('account', '2') }} investor
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>



                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-left">
                        <h4>{{Form::label('title','Address')}}</h4>
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=> ' Address'])}}
                    </div>
                    <div class="col-md-2"></div>
                </div>


                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-left" style="padding-top:10px">
                        <h4>{{Form::label('description','Country')}}</h4>
                        {{Form::text('description', '', ['class' => 'form-control', 'placeholder'=> ' Country'])}}
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-left" style="padding-top:10px">
                        <h4>{{Form::label('body','User Details')}}</h4>
                        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> ' Description Body'])}}
                    </div>
                    <div class="col-md-2"></div>
                </div>


                <div class="row">
                    <div class="col-sm-6 text-center" style="padding-top: 15px">
                        <a href="{{URL::asset('/posts')}}" class="btn btn-warning" role="button" >Cancel</a>       
                    </div>
                    <div class="col-sm-6 text-center" style="padding-top: 15px">
                        {{Form::submit('Submit',['class'=>'btn btn-success'])}}    
                    </div>
                </div><br>
                {!! Form::close() !!}




            </div>
        </div>      
    </div>
</div>

@endsection