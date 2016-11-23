@extends('layouts.app')

@section('header')
@stop

@section('content')
<div class="container">
    <h1>Vragen Restaurant</h1>

        Maak hier uw keuze uit uw 3 favoriete restaurants.

  <form action= {{ action('VragenController@store') }} method="post">
    <select name="place_1">
      @foreach ($places as $place)
      <option value="{{$place->name}}">{{$place->name}}</option>
      @endforeach
    </select>

    <select name="place_2">
      @foreach ($places as $place)
      <option value="{{$place->name}}">{{$place->name}}</option>
      @endforeach
    </select>

    <select name="place_3">
      @foreach ($places as $place)
      <option value="{{$place->name}}">{{$place->name}}</option>
      @endforeach
    </select>
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <button type="submit">Verzend</button>
  </form>
</div>






@stop
