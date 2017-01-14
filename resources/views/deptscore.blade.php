@extends('layouts/base')

@section('title', 'dept')


@section('body')
  <style media="screen">

  #departmentScoreboard td {
    letter-spacing: 2px;
    padding: 10px 0px !important;
    text-transform: uppercase;
  }

  #departmentScoreboard tr {
    background-color: #F59065;
    font-family: Bungee;
  }

  #departmentScoreboard th {
    letter-spacing: 4px;
    padding: 20px 20px !important;
    color: #ffffff;
    font-size: 20px;
    font-family: Bungee;
    text-align: center;
    background-color: #F36223;
    font-weight: normal;
  }
  </style>
  <body>
@endsection

@section('content')
  <br><br><br><br><br><br><br><br><br>
  <div class="container-fluid" id="departmentScoreboard">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th colspan="3">{{$department_name}} Scoreboard</th>
            </tr>
            <tr>
              <th>Event</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody id="leaderboardBody">
            <!-- The leaderboard will be updated dynamically from the database -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
