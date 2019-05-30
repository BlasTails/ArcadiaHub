@extends('layouts.Startupapp')
@section('content')

<div class="container col-md-12">
    <div class="row">
        

        {!! Form::open(['action' => 'RoleController@store','class' => 'col-md-12 text-center', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="mx-auto text-center"><br/><h1><p> Account Datails </p></h1></div>
                                
                <div class="row" >
                    <div class="col-md-4"></div>
                    <div class="col-md-8" style="padding-top:10px; ">

                        <h4>{{ Form::label('account','Account Type') }}</h4>
                        
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row" >
                    <div class="col-md-3 offset-md-3" style=" margin-bottom:22px">
                        {{ Form::radio('account', '1') }} startup
                    </div>
                    <div class="col-md-3 text-left" style=" margin-bottom:22px">
                        {{ Form::radio('account', '2') }} investor
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center" style="padding-top: 15px">
                        {{Form::submit('Submit',['class'=>'btn btn-success'])}}    
                    </div>
                </div><br>
                {!! Form::close() !!}
            </div>
        </div> 
        <div class="col-md-2"> </div>     
    </div>
</div>

@endsection