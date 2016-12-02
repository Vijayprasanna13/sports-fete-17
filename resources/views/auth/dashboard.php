<html>
  <head>
       <title>Admin dashboard</title>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
       <meta name="viewport" content="width=device-width, initial-scale=0.3">
  </head>
  <style>
    #logo {
      border-radius: 50%;
      padding: 4%;
    }
    #header-wrapper {
      background-color: #E74C3C;
      opacity: 1;
      border-bottom: 3px solid #C0392B;
    }
    #header {
      font-family: Bungee;
      margin-top: 2%;
      text-align: center;
      font-size: 150%;
    }
    #logout {
      margin-top: 10%;
      text-align: right;
    }
    #list-content {
      margin-top: 5%;
      width: 50%;
      margin-left: 25%;
    }
  </style>
  <body>
    <div class="container-fluid">
      <div class="containter">
      <div class="row" id="header-wrapper">
        <div class="col-sm-2">
          <img src="../images/sports_fete.jpg" id="logo" width="100" height="100"/>
        </div>
        <div class="col-sm-8" id="header">SPORTSFETE'17</div>
        <div class="col-sm-2">
          <a href="/auth/logout"><img src="../images/logout.png" id="logout" width="50" height="50"/></a>
        </div>
      </div>
      <div class="row" id="list">
        <div class="list-group" id="list-content">
            <a href="#cd" class="list-group-item">
              <h4><b>Add Department</b></h4>
              <p>Add a new department to Sportsfete'17 contestant list</p>
            </a>
            <a href="#" class="list-group-item">
              <h4><b>Update Event Scores</b></h4>
              <p>Add scores to an event</p>
            </a>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
