@extends('layout')
@section('content')
<div class="login">
@foreach ($errors->all() as $error)
    <p class="error"> {{ $error}} </p>
@endforeach
{{ Form::open() }}
<input type="text" name="username" placeholder="Username" /> <br />
<input type="password" name="password" placeholder="Password" /><br />
<input type="submit" value="Sign in" />
{{ Form::close() }}
</div>
@stop

