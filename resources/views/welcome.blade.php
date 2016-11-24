@extends('layouts.app')


@section('content')
<h1 class="indexTitle">Welkom bij De smaak van Leeuwarden</h1>

<div class="fb-login-wrapper">
  <a href="auth/facebook">
    <input type="button" disabled="disabled" class="fb-login-button" id="login" value="Aanmelden met Facebook">
  </a>
</div>

<div class="termsAndConditionsWrapper">
  <input type="checkbox" id="conditionsCheckbox">
  <p>Ik ga akkoord met de
    <a href="disclaimer" id="termsAndConditions">Algemene Voorwaarden.</a>
  </p>
</div>

  <script type='text/javascript'>
        document.getElementById('conditionsCheckbox').onclick=function(){
            if(this.checked == false){
                 document.getElementById('login').disabled = true;
            } else {
                document.getElementById('login').removeAttribute('disabled');
            }
        };
</script>
@stop
