@extends('layouts/base')

@section('title', 'Scoreboard')

@section('body')
  <style media="screen">
    .container {
      padding-top: 15vh;
    }

    div {
      text-align: center;
      text-transform: capitalize;
    }

    #leaderboard {
      background-image: url('../images/leaderboard_bg.jpg');
      background-size: cover;
      background-position: center;
      padding: 10% 0;
    }

    td {
      letter-spacing: 2px;
      padding: 10px 0px !important;
      text-transform: uppercase;
    }

    tr {
      background-color: #F59065;
      font-family: Bungee;
    }

    #leaderboardBody tr:hover {
      background-color: orange;
      cursor: pointer;
    }

    th {
      letter-spacing: 4px;
      padding: 20px 20px !important;
      color: #ffffff;
      font-size: 20px;
      font-family: Bungee;
      text-align: center;
      background-color: #F36223;
      font-weight: normal;
    }

    .scoretable {
      position: relative;
      font-family: bungee;
    }

    .panel-heading {
      background-color: #F36223 !important;
      color: #ffffff !important;
    }

    .scoretable:before, .scoretable:after
    {
      z-index: -1;
      position: absolute;
      content: "";
      bottom: 15px;
      left: 10px;
      width: 50%;
      top: 80%;
      max-width:300px;
      background: #777;
      -webkit-box-shadow: 0 15px 10px #777;
      -moz-box-shadow: 0 15px 10px #777;
      box-shadow: 0 15px 10px #777;
      -webkit-transform: rotate(-3deg);
      -moz-transform: rotate(-3deg);
      -o-transform: rotate(-3deg);
      -ms-transform: rotate(-3deg);
      transform: rotate(-3deg);
    }
    .scoretable:after
    {
      -webkit-transform: rotate(3deg);
      -moz-transform: rotate(3deg);
      -o-transform: rotate(3deg);
      -ms-transform: rotate(3deg);
      transform: rotate(3deg);
      right: 10px;
      left: auto;
    }

    .scoretable {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      text-align: center;
    }
  </style>
  <script type="text/javascript" src="/js/scoreboard.js"></script>
  <body>
@endsection

@section('content')
  <div class="container-fluid" id="leaderboard">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-1 table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th colspan="3">Leaderboard</th>
            </tr>
          </thead>
          <tbody id="leaderboardBody">
            <!-- The leaderboard will be updated dynamically from the database -->
          </tbody>
        </table>
      </div>
      <div class="col-sm-3 col-sm-offset-1">
        <img src="images/leaderboard.png" class="img-responsive table-image" alt="">
      </div>
    </div>
  </div>

  <div class="container" id="events_score">

  </div>
@endsection
