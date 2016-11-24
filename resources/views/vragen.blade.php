@extends('layouts.app')

@section('content')

<div class="mainWrapper">
  <h1 class="subPageTitle">De Smaak van Leeuwarden</h1>
  <h3 id="choiceTitle">Maak hieronder een keuze van de 3 beste locale restaurants:</h3>
  <section id="bestRestaurantsSection">


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
