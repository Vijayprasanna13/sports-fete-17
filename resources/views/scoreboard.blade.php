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
  </style>
  <script type="text/javascript" src="/js/scoreboard.js"></script>
  <body>
@endsection

@section('content')
  <div class="container" id="events_score">

  </div>
@endsection
