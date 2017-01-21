@extends('layouts/auth')

@section('content')
  <div class="row" id="type-selector-wrapper">
    Add scores for an event for participating departments. For events that have already ended update the scores.
    <br/>
    <b> The score that is entered in the input box is the cumilative final scores, not the increment/decrement. </b>
  </div>
  <br/>
  <div class="row" id="day-input-wrapper">
    <div class="form-group form-inline">
      <label for="day">Day : </label>
      <input id="day" type="number" class="form-control"/>
    </div>
  </div>
@endsection
