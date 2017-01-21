<html>
  <head>
       <title>Admin dashboard</title>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
       <link href="../css/auth.css" rel="stylesheet" type="text/css">
       <meta name="viewport" content="width=device-width, initial-scale=0.3">
  </head>
  <body>
    <div class="container-fluid">
      <div class="containter">
      <div class="row" id="header-wrapper">
        <div class="col-sm-2">
          <div id="logo">
            <img src="../images/sports_fete.jpg" width="100" height="100" style="border-radius:50%;"/>
          </div>
        </div>
        <div class="col-sm-8" id="header">SPORTSFETE'17</div>
        <div class="col-sm-2">
          <a href="/auth/logout"><img src="../images/logout.png" id="logout" width="50" height="50"/></a>
        </div>
      </div>
      @yield('content')
    </div>
    </div>
  </body>
  <script src="../js/score.js"></script>
</html>
