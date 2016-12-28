<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sportsfete'17 - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Kumar+One" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/base.css">
  </head>

  @yield('body')

  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand" id="logo">SPORTSFETE'17</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavBar">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/photos">Photos</a></li>
          <li><a href="/eventsList">Events</a></li>
          <li><a href="/scoreboard">Scoreboard</a></li>
          <li><a href="/contacts">Contacts</a></li>
        </ul>
        @yield('navbar')
      </div>
    </div>
  </nav>

  @yield('content')
  </body>
</html>
