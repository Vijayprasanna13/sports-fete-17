<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link type="text/css" rel="stylesheet" href="css/style.css">

      <!--
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.6/handlebars.js"></script>
      -->
    </head>

    <body>
      <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Logo</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Page1</a></li>
              <li><a href="#">Page2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-sm-3 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th colspan="3" style="text-align: center; background-color: #DD4A3A">Leaderboard</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                  <td>CSE</td>
                  <td>00</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>CSE</td>
                  <td>00</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>CSE</td>
                  <td>00</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>CSE</td>
                  <td>00</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>CSE</td>
                  <td>00</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>CSE</td>
                  <td>00</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>CSE</td>
                  <td>00</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Modal Header</h4>
              <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
          </div>

          <div class="col-sm-8 col-lg-7 col-lg-offset-1 table-responsive">
            <table class="table table-striped">
              <thead style="background-color: #DD4A3A">
                <tr>
                  <th>Date</th>
                  <th>Event</th>
                  <th>Start</th>
                  <th>End</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1/1/2017</td>
                  <td>Event Name</td>
                  <td>00:00</td>
                  <td>00:00</td>
                </tr>
                <tr>
                  <td>1/1/2017</td>
                  <td>Event Name</td>
                  <td>00:00</td>
                  <td>00:00</td>
                </tr>
                <tr>
                  <td>1/1/2017</td>
                  <td>Event Name</td>
                  <td>00:00</td>
                  <td>00:00</td>
                </tr>
                <tr>
                  <td>1/1/2017</td>
                  <td>Event Name</td>
                  <td>00:00</td>
                  <td>00:00</td>
                </tr>
                <tr>
                  <td>1/1/2017</td>
                  <td>Event Name</td>
                  <td>00:00</td>
                  <td>00:00</td>
                </tr>
                <tr>
                  <td>1/1/2017</td>
                  <td>Event Name</td>
                  <td>00:00</td>
                  <td>00:00</td>
                </tr>
                <tr>
                  <td>1/1/2017</td>
                  <td>Event Name</td>
                  <td>00:00</td>
                  <td>00:00</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>

      <script>
        $(document).ready(function(){
          $('.carousel').carousel();
          //$('.modal').modal();
          $('#modal1').modal('open');
        });
      </script>
  </body>
</html>
