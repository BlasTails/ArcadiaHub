@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<h1>this is admin dash</h1>

{!! Form::open(['action' => 'RoleController@store', 'method' => 'POST']) !!}

{{ Form::label('account','Account Type') }}
<br>
{{ Form::radio('account', '1') }} startup
{{ Form::radio('account', '2') }} investor

{!! Form::close() !!}

@endsection