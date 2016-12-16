@extends('layouts.app')


@section('content')
<h1 class="indexTitle">Welkom bij De Smaak van Leeuwarden</h1>

<div class="mainContent">
  <div class="fb-login-wrapper">
    <a href="auth/facebook">
      <input type="button" disabled="disabled" class="fb-login-button" id="login" value="Aanmelden met Facebook">
    </a>
  </div>

  <div class="termsAndConditionsWrapper">
    <input type="checkbox" id="conditionsCheckbox">
    <label for="conditionsCheckbox">Ik ga akkoord met de
      <a href="disclaimer" id="termsAndConditions">Algemene Voorwaarden.</a>
    </label>
  </div>

  <div class="companyLogosWrapper">
    <a class="companyLogo"target="_blank" href="https://www.snakeware.nl">
      <img src="../img/logo-snakeware.svg" alt="SnakeWare" style="width:280px;height:auto;border:0;padding-top:13px">

    <a class="companyLogo"target="_blank" href="https://www.nhl.nl/">
      <img src="../img/logo-nhl.svg" alt="NHL Hogeschool" style="width:115px;height:auto;border:0;padding-top:10px">

    <a class="companyLogo"target="_blank" href="http://www.dehuisaanhuis.nl/">
      <img src="../img/logo-huis_aan_huis.svg" alt="Huis aan Huis" style="width:290px;height:auto;border:0;padding-top:25px">
  </div>
</div>

<!-- Script -->

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
