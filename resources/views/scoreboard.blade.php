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
  <div class="container" id="events_score">

  </div>
@endsection
