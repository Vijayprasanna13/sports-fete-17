@extends('layouts/auth')

@section('content')
  <div class="row" id="type-selector-wrapper">
    Add scores for an event for participating departments. For events that have already ended update the scores.
    <br/>
    <b> The score that is entered in the input box is the cumilative final scores, not the increment/decrement. </b>
  </div>
  <br/>
  <div class="row" id="form-wrapper">

  <!-- Input for day-->
    <div class="form-group form-inline" id="day-input-wrapper">
      <label for="day">Day : </label>
      <input id="day" type="number" class="form-control"/>
    </div>

    <!-- Input for event-->
    <div class="form-group form-inline" id="event-selector-wrapper">
      <label for="event">Event : </label>
      <select class="form-control" id="event"></select>
    </div>

  </div>
@endsection
