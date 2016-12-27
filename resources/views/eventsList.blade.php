@extends('layouts/base')

@section('title', 'Events')

@section('body')
  <link rel="stylesheet" href="/css/eventsList.css">
  <script type="text/javascript" src="/js/eventsList.js"></script>
  <body>
@endsection

@section('content')
  <div class="container" id="days">
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#day1">Day 1</a></li>
      <li><a data-toggle="pill" href="#day2">Day 2</a></li>
      <li><a data-toggle="pill" href="#day3">Day 3</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade in active" id="day1">
        <div class="col-sm-8 table-responsive">
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th class="text-center">Date</th>
                <th class="text-center">Event</th>
                <th class="text-center">Start</th>
                <th class="text-center">Venue</th>
              </tr>
            </thead>

            <tbody id="events_body_day1">
              <!-- The events table will be updated dynamically from the database -->
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="day2">
        <div class="col-sm-8 table-responsive">
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th class="text-center">Date</th>
                <th class="text-center">Event</th>
                <th class="text-center">Start</th>
                <th class="text-center">Venue</th>
              </tr>
            </thead>

            <tbody id="events_body_day2">
              <!-- The events table will be updated dynamically from the database -->
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="day3">
        <div class="col-sm-8 table-responsive">
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th class="text-center">Date</th>
                <th class="text-center">Event</th>
                <th class="text-center">Start</th>
                <th class="text-center">Venue</th>
              </tr>
            </thead>

            <tbody id="events_body_day3">
              <!-- The events table will be updated dynamically from the database -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
