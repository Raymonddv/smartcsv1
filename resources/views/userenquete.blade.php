@extends('layouts.app')

@section('content')
<div class="container">
<h1>Vraag</h1>
<!-- slider 1

      <div class="sliderContainer" name="place_1_kwaliteit_eten">
       <input type="checkbox" id="checkbox-1" class="regular-checkbox" onclick="disable()">
       <label for="checkbox-1" style="top: 5px"></label>
       <label class="question" for="checkbox-1">Goede kwaliteit van het eten
       </label>

       <input id="slider-1" type="range" min="1" max="11" step="1" value="6" disabled="disabled">

       <p class="sliderText neutraalT">Neutraal</p>
       <p class="sliderText goedT">Goed</p>
       <p class="sliderText uitstekendT">Uitstekend</p>

     </div>
     <script>
       function disable(){
         if (document.getElementById('checkbox-1').checked == false) {
           document.getElementById('slider-1').setAttribute("disabled", "disabled");
           document.getElementById('slider-1').value = "6";
           } else {
             document.getElementById('slider-1').removeAttribute('disabled');
           }
         }
     </script>
      <input type="submit" value="Submit">
     </div>
-->
<div class="container">
  <form method="post" action="{{ action('UserEnquetesController@store') }}">
    <input type="range" name="place_1_kwaliteit_eten" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_1_prijs_kwaliteit" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_1_variatie" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_1_sfeer" max="11" min="0" step="1" value="">
    <br>
    <input type="range" name="place_1_service" max="11" min="0" step="1" value="">
    <br>
    <input type="submit" value="Submit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
</div>




@stop
