@extends('layouts.app')

@section('content')
<div class="container">
<h1>Vraag</h1>
<div class="container">
  <form method="post" action="{{ action('UserEnquetes3Controller@store') }}">
    <input type="range" name="place_3_kwaliteit_eten" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_3_prijs_kwaliteit" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_3_variatie" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_3_sfeer" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_3_service" max="11" min="0" step="1" value="">
    <br>
    <input type="submit" value="Submit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
</div>

@stop
