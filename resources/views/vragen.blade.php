@extends('layout')

@section('header')
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="/">Home</a></li>
  <li role="presentation"><a href="about">About</a></li>
  <li role="presentation"><a href="vragen">Vragen</a></li>
</ul>
@stop

@section('content')
    <h1>Vragen</h1>
    <h3>test vraag 1?</h3>
    <div class="btn-group" role="group" aria-label="...">
      <button type="button" class="btn btn-default">1</button>
      <button type="button" class="btn btn-default">2</button>
      <button type="button" class="btn btn-default">3</button>
      <button type="button" class="btn btn-default">4</button>
      <button type="button" class="btn btn-default">5</button>
    </div>
     <button type="submit" class="btn btn-primary">Antwoord</button>

</div>
@stop
