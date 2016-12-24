<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="http://fonts.googleapis.com/icon?family=Kumar+One" rel="stylesheet">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/js/index.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">

      <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
      <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" id="logo">SPORTSFETE'17</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="nav navbar-nav">
              <li><a href="#">Photos</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Scoreboard</a></li>
              <li><a href="#">Contacts</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#myCarousel">Home</a></li>
              <li><a href="#leaderboard">Leaderboard</a></li>
              <li><a href="#events">Upcoming Events</a></li>
              <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="images/image4.jpg" alt="">
          </div>

          <div class="item">
            <img src="images/image5.jpg" alt="">
          </div>

          <div class="item">
            <img src="images/image6.jpg" alt="">
          </div>

          <div class="item">
            <img src="images/image7.jpg" alt="">
          </div>

        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hiden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hiden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>

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

      <div class="container-fluid" id="events">
        <div class="row">
          <div class="col-sm-3 col-sm-offset-1">
            <img class="img-responsive img-rounded table-image" src="images/upcoming_events.jpg" alt="">
          </div>
          <div class="col-sm-6 col-sm-offset-1 table-responsive">
            <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th class="text-center">Date</th>
                  <th class="text-center">Event</th>
                  <th class="text-center">Start</th>
                  <th class="text-center">Venue</th>
                </tr>
              </thead>

              <tbody id="events_body">
                <!-- The events table will be updated dynamically from the database -->
              </tbody>
            </table>
          </div>

        </div>
        <br><br>
        <div class="row text-center" style="padding: 20px">
          <span style="font-family: Kumar One; font-size: 20px;">
            To see the whole list of event <a href="#">click here</a><!-- Add a events list page and link to it. -->
          </span>
        </div>
      </div>
<!--
      <div class="container-fluid text-center" id="events_score">
      </div>
-->
  </body>
</html>
