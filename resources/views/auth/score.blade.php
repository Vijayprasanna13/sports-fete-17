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
    <div class="form-group form-inline" id="event-input-wrapper">
      <label for="event">Event Name : </label>
      <select class="form-control" id="event">
      </select>
    </div>
</div>
<div class="row">
      <div id="departments">
        <div class="row">
          <div class="col-sm-3 well">
            <label for="CSE">CSE : </label>
            <input type="integer" name="CSE" id="CSE" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="ECE">ECE : </label>
            <input type="integer" name="ECE" id="ECE" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="EEE">EEE : </label>
            <input type="integer" name="EEE" id="EEE" class="form-control inline dept" value="0">  
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 well">
            <label for="MECH">MECH : </label>
            <input type="integer" name="MECH" id="MECH" class="form-control inline dept" value="0">
          </div> 
          <div class="col-sm-3 well">
            <label for="ICE">ICE : </label>
            <input type="integer" name="ICE" id="ICE" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="CHEM">CHEM : </label>
            <input type="integer" name="CHEM" id="CHEM" class="form-control inline dept" value="0">  
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 well">
            <label for="CIVIL">CIVIL : </label>
            <input type="integer" name="CIVIL" id="CIVIL" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="PROD">PROD : </label>
            <input type="integer" name="PROD" id="PROD" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="META">META : </label>
            <input type="integer" name="META" id="META" class="form-control inline dept" value="0">  
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 well">
            <label for="ARCHI">ARCHI : </label>
            <input type="integer" name="ARCHI" id="ARCHI" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="MSC">MSC : </label>
            <input type="integer" name="MSC" id="MSC" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="MCA">MCA : </label>
            <input type="integer" name="MCA" id="MCA" class="form-control inline dept" value="0">  
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 well">
            <label for="DOMS">DOMS : </label>
            <input type="integer" name="DOMS" id="DOMS" class="form-control inline dept" value="0">
          </div>
          <div class="col-sm-3 well">
            <label for="MTECH well">MTECH : </label>
            <input type="integer" name="MTECH" id="MTECH" class="form-control inline dept" value="0">
          </div>
        </div>
      </div>
 </div>
 <div class="row">
   <div class="col-sm-4 col-sm-offset-5">
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <button class="btn btn-success" id="submit">&nbsp Submit Scores &nbsp</button></div>
 </div>
@endsection
