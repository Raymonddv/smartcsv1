@extends('layouts.app')

@section('content')
<div class="container">
<h1>Vraag</h1>
<div class="container">
  <form method="post" action="{{ action('UserEnquetes2Controller@store') }}">
    <input type="range" name="place_2_kwaliteit_eten" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_2_prijs_kwaliteit" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_2_variatie" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_2_sfeer" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_2_service" max="11" min="0" step="1" value="">
    <br>
    <input type="submit" value="Submit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
</div>

@stop
