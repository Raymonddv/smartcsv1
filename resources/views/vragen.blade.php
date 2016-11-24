@extends('layouts.app')

@section('content')

<div class="mainWrapper">
  <h1 class="subPageTitle">De Smaak van Leeuwarden</h1>
  <h3 id="choiceTitle">Maak hieronder een keuze van de 3 beste locale restaurants:</h3>

  <form method="post" action= "{{action('VragenController@store')}}" >
    <section id="bestRestaurantsSection">
      <select name="place_1" id="choice1">
        <option value="" hidden="hidden">Maak een keuze</option>
        @foreach ($places as $place)
        <option value="{{$place->name}}">{{$place->name}}</option>
        @endforeach
      </select>



      <select name="place_2" id="choice2">
        <option value="" hidden="hidden">Maak een keuze</option>
        @foreach ($places as $place)
        <option value="{{$place->name}}">{{$place->name}}</option>
        @endforeach
      </select>



      <select name="place_3" id="choice3">
        <option value="" hidden="hidden">Maak een keuze</option>
        @foreach ($places as $place)
        <option value="{{$place->name}}">{{$place->name}}</option>
        @endforeach
      </select>
    </section>
     <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <div class="buttonCenter">
      <input type="submit" class="button gradientcolor" title="button"
      value="Volgende vraag">
    </div>
  </form>




</div>


@stop
