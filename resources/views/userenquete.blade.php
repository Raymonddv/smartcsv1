@extends('layouts.app')

@section('content')
<div class="mainWrapper_restScore">
<h1 class="subPageTitle">De Smaak van Leeuwarden</h1>
  @foreach ($places as $Place)
    <h3 id="scoreTitle">Geef hieronder aan welke van onderstaande vijf beoordelingspunten ervoor zorgen dat {{$Place->place_1}} tot jouw favorieten behoort. Na het aanvinken verschijnt een schuifbalk. Geef hiermee aan in welke mate je tevreden bent over het betreffende beoordelingspunt.
    </h3>
  @endforeach

  <section id="RestaurantScoreSection">
    <form method="post" action="{{ action('UserEnquetesController@store') }}">

  <div class="restaurantTitle">
<!--     <h3>Uw score voor</h3> -->
    <h2>{{$Place->place_1}}</h2>
  </div>

    <!-- slider 1 -->
    <div class="sliderContainer">
      <label for="giveScore_1">
        <input type="checkbox" id="giveScore_1" class="regular-checkbox" onclick="disable()"/>
        <label for="giveScore_1" style="top: 3px"></label>
        Goede kwaliteit van het eten
      </label>
    </div>

    <div id="dvScore_1" style="display: none">
        <input type="range" name="place_1_kwaliteit_eten" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
    </div>

    <!-- slider 2-->
    <div class="sliderContainer">
      <label for="giveScore_2">
        <input type="checkbox" id="giveScore_2" class="regular-checkbox" onclick="disable()"//>
        <label for="giveScore_2" style="top: 3px"></label>
        Goede prijs-kwaliteitverhouding
      </label>
    </div>

    <div id="dvScore_2" style="display: none">
        <input type="range" name="place_1_prijs_kwaliteit" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
    </div>

    <!-- slider 3-->
    <div class="sliderContainer">
      <label for="giveScore_3">
        <input type="checkbox" id="giveScore_3" class="regular-checkbox" onclick="disable()"//>
        <label for="giveScore_3" style="top: 3px"></label>
        Voldoende variatie in het menu
      </label>
    </div>

    <div id="dvScore_3" style="display: none">
        <input type="range" name="place_1_variatie" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
    </div>

    <!-- slider 4-->
    <div class="sliderContainer">
      <label for="giveScore_4">
        <input type="checkbox" id="giveScore_4" class="regular-checkbox" onclick="disable()"//>
        <label for="giveScore_4" style="top: 3px"></label>
        Aangename sfeer in het restaurant
      </label>
    </div>

    <div id="dvScore_4" style="display: none">
        <input type="range" name="place_1_sfeer" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
    </div>

    <!-- slider 5-->
    <div class="sliderContainer">
      <label for="giveScore_5">
        <input type="checkbox" id="giveScore_5" class="regular-checkbox" onclick="disable()"//>
        <label for="giveScore_5" style="top: 3px"></label>
        Snelle/vriendelijke bediening
      </label>
    </div>

    <div id="dvScore_5" style="display: none">
        <input type="range" name="place_1_service" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
    </div>
  </section>

    <!-- Button -->
    <div class="buttonCenter">
      <input type="submit" value="Volgende vraag" class="button gradientcolor">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
  </form>

<!-- Script -->

<script>
function disable(){
  if (document.getElementById('giveScore_1').checked == false) {
    document.getElementsByName('place_1_kwaliteit_eten')[0].setAttribute("disabled", "disabled");
    document.getElementsByName('place_1_kwaliteit_eten')[0].value = "5";
    } else {
      document.getElementsByName('place_1_kwaliteit_eten')[0].removeAttribute('disabled');
  }

  if (document.getElementById('giveScore_2').checked == false) {
    document.getElementsByName('place_1_prijs_kwaliteit')[0].setAttribute("disabled", "disabled");
    document.getElementsByName('place_1_prijs_kwaliteit')[0].value = "5";
    } else {
      document.getElementsByName('place_1_prijs_kwaliteit')[0].removeAttribute('disabled');
  }

  if (document.getElementById('giveScore_3').checked == false) {
    document.getElementsByName('place_1_variatie')[0].setAttribute("disabled", "disabled");
    document.getElementsByName('place_1_variatie')[0].value = "5";
    } else {
      document.getElementsByName('place_1_variatie')[0].removeAttribute('disabled');
  }

  if (document.getElementById('giveScore_4').checked == false) {
    document.getElementsByName('place_1_sfeer')[0].setAttribute("disabled", "disabled");
    document.getElementsByName('place_1_sfeer')[0].value = "5";
    } else {
      document.getElementsByName('place_1_sfeer')[0].removeAttribute('disabled');
  }

  if (document.getElementById('giveScore_5').checked == false) {
    document.getElementsByName('place_1_service')[0].setAttribute("disabled", "disabled");
    document.getElementsByName('place_1_service')[0].value = "5";
    } else {
      document.getElementsByName('place_1_service')[0].removeAttribute('disabled');
  }
}
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">

    // slider 1
    $(function () {
        $("#giveScore_1").click(function () {
            if ($(this).is(":checked")) {
                $("#dvScore_1").show();
            } else {
                $("#dvScore_1").hide();
            }
        });
    });

    // slider 2
    $(function () {
        $("#giveScore_2").click(function () {
            if ($(this).is(":checked")) {
                $("#dvScore_2").show();
            } else {
                $("#dvScore_2").hide();
            }
        });
    });

    // slider 3
    $(function () {
        $("#giveScore_3").click(function () {
            if ($(this).is(":checked")) {
                $("#dvScore_3").show();
            } else {
                $("#dvScore_3").hide();
            }
        });
    });

    // slider 4
    $(function () {
        $("#giveScore_4").click(function () {
            if ($(this).is(":checked")) {
                $("#dvScore_4").show();
            } else {
                $("#dvScore_4").hide();
            }
        });
    });

    // slider 5
    $(function () {
        $("#giveScore_5").click(function () {
            if ($(this).is(":checked")) {
                $("#dvScore_5").show();
            } else {
                $("#dvScore_5").hide();
            }
        });
    });
</script>

 @stop
