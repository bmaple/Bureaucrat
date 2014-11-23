@extends('layout')
@section('content')
<div class="login">
@foreach ($errors->all() as $error)
    <p class="error"> {{ $error}} </p>
@endforeach
{{ Form::open(array('autocomplete' => 'on' )) }}
{{ Form::text('username', 'username') }} <br />
{{ Form::password('password') }}<br />
{{ Form::submit('Login') }}
{{ Form::close() }}
</div>
@stop

