@extends('layouts.Startupapp')
@section('content')

<div class="container">
    <div class="row">
        

        {!! Form::open(['action' => 'RoleController@store','class' => 'col-md-12 text-center', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="mx-auto text-center"><br/><h1><p> Account Details </p></h1></div>
                                
                <div class="row" >
                    <div class="col-md-12" style="padding-top:10px; ">

                        <h4>{{ Form::label('account','Account Type') }}</h4>
                        
                    </div>
                </div>

                <div class="row" >
                    <div class="col-md-12" style=" margin-bottom:22px">
                        {{ Form::radio('account', '1') }} startup <br/>
                        {{ Form::radio('account', '2') }} investor
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center" style="padding-top: 15px">
                        {{Form::submit('Submit',['class'=>'btn btn-success'])}}    
                    </div>
                </div><br>
                {!! Form::close() !!}
            </div>
        </div>     
    </div>
</div>

@endsection