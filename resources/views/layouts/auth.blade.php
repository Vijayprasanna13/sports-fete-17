<html>
  <head>
       <title>Admin dashboard</title>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
       <link href="../css/auth.css" rel="stylesheet" type="text/css">
       <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
       <meta name="viewport" content="width=device-width, initial-scale=0.3">
  </head>
  <body>
    <div class="container-fluid">
      <div class="containter">
      <div class="row" id="header-wrapper">
        <div class="col-sm-2">
          <div id="logo">
            <img src="/images/secret/icon.png" width="50" height="50" />
          </div>
        </div>
        <div class="col-sm-8" id="header" style="font-family: Pacifico;font-weight: 400"><b>SportsFete'17<br/><br/></b></div>
        <div class="col-sm-2">
          <a href="/auth/logout"><button class="btn btn-default" style="margin-top: 10%;">logout</button></a>
        </div>
      </div>
      @yield('content')
    </div>
    </div>
  </body>
  <script src="../js/score.js"></script>
</html>
