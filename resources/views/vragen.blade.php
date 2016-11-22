@extends('layouts.app')

@section('header')
@stop

@section('content')
<div class="container">
    <h1>Vragen Restaurant</h1>
<form action="">
<select name="restaurant1">
  @foreach ($places as $place)
  <option value="{{$place->name}}">{{$place->name}}</option>
  @endforeach
</select>

<select name="restaurant2">
  @foreach ($places as $place)
  <option value="{{$place->name}}">{{$place->name}}</option>
  @endforeach
</select>

<select name="restaurant3">
  @foreach ($places as $place)
  <option value="{{$place->name}}">{{$place->name}}</option>
  @endforeach
</select>

<button type="submit">Verzend</button>

</form>

</div>






@stop
