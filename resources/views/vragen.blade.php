@extends('layouts.app')

@section('header')
@stop

@section('content')
@extends('layouts.app')

@section('header')
@stop

@section('content')
  <div class="mainWrapper">
    <h1 class="subPageTitle">De Smaak van Leeuwarden</h1>
    <h3 id="choiceTitle">Maak hieronder een keuze van de 3 beste locale restaurants:</h3>
    <section id="bestRestaurantsSection">


      <h6>Keuze 1</h6>
      <select name="choice1" id="choice1"/>
        <option value="" hidden="hidden">Maak een keuze</option>
        <option value="1">Restaurant 1</option>
        <option value="2">Restaurant 2</option>
        <option value="3">Restaurant 3</option>
        <option value="4">Restaurant 4</option>
        <option value="5">Restaurant 5</option>
        <option value="6">Restaurant 6</option>
        <option value="7">Restaurant 7</option>
        <option value="8">Restaurant 8</option>
      </select>

      <h6>Keuze 2</h6>
      <select name="choice2" id="choice2">
        <option value="" hidden="hidden">Maak een keuze</option>
        <option value="1">Link to database</option>
      </select>

      <h6>Keuze 3</h6>
      <select name="choice3" id="choice3">
        <option value="" hidden="hidden">Maak een keuze</option>
        <option value="1">Link to database</option>
      </select>
    </section>
    <div class="buttonCenter">
      <a href="#">
        <input type="button" class="button gradientcolor" title="button"
        value="Volgende vraag">
      </a>
    </div>
  </div>






@stop







@stop
