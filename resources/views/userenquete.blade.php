@extends('layouts.app')

@section('content')
<div class="mainWrapper">
<h1 class="subPageTitle">De Smaak van Leeuwarden</h1>
    <h3 id="scoreTitle">Selecteer de sterke punten en waardeer deze punten van
    <!-- Restaurant # --></h3>
    <section id="RestaurantScoreSection">
  <form method="post" action="{{ action('UserEnquetesController@store') }}">
    <div class="sliderContainer">
        <input type="checkbox" id="checkbox-1" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-1" style="top: 5px"></label>
        <label class="question" for="checkbox-1">Goede kwaliteit van het eten
        </label>

        <input type="range" name="place_1_kwaliteit_eten" max="10" min="0" step="1" value="" disabled="disabled">
        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
    </div>


<div class="sliderContainer">
        <input type="checkbox" id="checkbox-2" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-2" style="top: 5px"></label>
        <label class="question" for="checkbox-2">Goede prijs-kwaliteitverhouding
        </label>

    <input type="range" name="place_1_prijs_kwaliteit" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>

<div class="sliderContainer">
        <input type="checkbox" id="checkbox-3" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-3" style="top: 5px"></label>
        <label class="question" for="checkbox-3">Goede prijs-kwaliteitverhouding
        </label>

    <input type="range" name="place_1_variatie" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>

<div class="sliderContainer">
        <input type="checkbox" id="checkbox-4" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-4" style="top: 5px"></label>
        <label class="question" for="checkbox-4">Goede prijs-kwaliteitverhouding
        </label>

    <input type="range" name="place_1_sfeer" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>

<div class="sliderContainer">
        <input type="checkbox" id="checkbox-5" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-5" style="top: 5px"></label>
        <label class="question" for="checkbox-5">Goede prijs-kwaliteitverhouding
        </label>

    <input type="range" name="place_1_service" max="10" min="0" step="1" value="" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>


    <input type="submit" value="Submit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
</div>
</section>
<!-- js -->
<script>
function disable(){
      if (document.getElementById('checkbox-1').checked == false) {
        document.getElementsByName('place_1_kwaliteit_eten')[0].setAttribute("disabled", "disabled");
        document.getElementsByName('place_1_kwaliteit_eten')[0].value = "5";
        } else {
          document.getElementsByName('place_1_kwaliteit_eten')[0].removeAttribute('disabled');
        }

              if (document.getElementById('checkbox-2').checked == false) {
        document.getElementsByName('place_1_prijs_kwaliteit')[0].setAttribute("disabled", "disabled");
        document.getElementsByName('place_1_prijs_kwaliteit')[0].value = "5";
        } else {
          document.getElementsByName('place_1_prijs_kwaliteit')[0].removeAttribute('disabled');
        }

              if (document.getElementById('checkbox-3').checked == false) {
        document.getElementsByName('place_1_variatie')[0].setAttribute("disabled", "disabled");
        document.getElementsByName('place_1_variatie')[0].value = "5";
        } else {
          document.getElementsByName('place_1_variatie')[0].removeAttribute('disabled');
        }

              if (document.getElementById('checkbox-4').checked == false) {
        document.getElementsByName('place_1_sfeer')[0].setAttribute("disabled", "disabled");
        document.getElementsByName('place_1_sfeer')[0].value = "5";
        } else {
          document.getElementsByName('place_1_sfeer')[0].removeAttribute('disabled');
        }

              if (document.getElementById('checkbox-5').checked == false) {
        document.getElementsByName('place_1_service')[0].setAttribute("disabled", "disabled");
        document.getElementsByName('place_1_service')[0].value = "5";
        } else {
          document.getElementsByName('place_1_service')[0].removeAttribute('disabled');
        }
  }
</script>






<!-- // if (document.getElementById('checkbox-2').checked == false) {
          //   document.getElementById('slider-2').setAttribute("disabled", "disabled");
          //   document.getElementById('slider-2').value = "6";
          //   } else {
          //     document.getElementById('slider-2').removeAttribute('disabled');
          //   }


          // if (document.getElementById('checkbox-3').checked == false) {
          //   document.getElementById('slider-3').setAttribute("disabled", "disabled");
          //   document.getElementById('slider-3').value = "6";
          //   } else {
          //     document.getElementById('slider-3').removeAttribute('disabled');
          //   }

          // if (document.getElementById('checkbox-4').checked == false) {
          //   document.getElementById('slider-4').setAttribute("disabled", "disabled");
          //   document.getElementById('slider-4').value = "6";
          //   } else {
          //     document.getElementById('slider-4').removeAttribute('disabled');
          //   }

          // if (document.getElementById('checkbox-5').checked == false) {
          //   document.getElementById('slider-5').setAttribute("disabled", "disabled");
          //   document.getElementById('slider-5').value = "6";
          //   } else {
          //     document.getElementById('slider-5').removeAttribute('disabled');
          //   } -->

 @stop
