@extends('layouts.app')

@section('header')
@stop

@section('content')
@extends('layouts.app')

@section('header')
@stop

@section('content')
<div class="container">
    <h1>Vragen Restaurant</h1>

        Maak hier uw keuze uit uw 3 favoriete restaurants.

  <form action= {{ action('VragenController@store') }} method="post">
    <select name="place_1" id="choice1">
      @foreach ($places as $place)
      <option value="{{$place->name}}">{{$place->name}}</option>
      @endforeach
    </select>

    <select name="place_2" id="choice2">
      @foreach ($places as $place)
      <option value="{{$place->name}}">{{$place->name}}</option>
      @endforeach
    </select>

    <select name="place_3" id="choice3">
      @foreach ($places as $place)
      <option value="{{$place->name}}">{{$place->name}}</option>
      @endforeach
    </select>
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <div class="buttonCenter">
      <input type="submit" class="button gradientcolor" title="button"
      value="Volgende vraag">
    </div>
  </form>
</div>






@stop







@stop
