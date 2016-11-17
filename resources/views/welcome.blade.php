@extends('layout')


@section('content')
    <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="/">Home</a></li>
  <li role="presentation"><a href="about">About</a></li>
  <li role="presentation"><a href="vragen">Vragen</a></li>
</ul>
    <h1>The Welcome Page Goes Here</h1>
    <a class="btn btn-info" href="auth/facebook" role="button">Login with Facebook</a>
@stop
