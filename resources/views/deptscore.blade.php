<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$department_name}} Events</title>
    <link rel="shortcut icon" href="images/NIT_Trichy_logo.jpg" />
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>
    <link href="/css/score.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="menubar1">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">SportsFete'17</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--<li>
                        <a href="about.html">About us</a>
                    </li>-->
                    <li class="menulinks">
                        <a href="/">Home</a>
                    </li class="menulinks">
                    <li class="menulinks">
                        <a href="/photos">Photos</a>
                    </li>

                    <li class="menulinks">
                        <a href="/events">Events</a>
                    </li>
                    <li class="menulinks">
                        <a href="/contacts">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <div class="container-fluid" id="departmentScoreboard" style="padding-top: 5vh;">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-2 table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th colspan="4" style="text-align:center">{{$department_name}} Events</th>
            </tr>
            <tr>
              <th style="text-align:center">Event</th>
              <th style="text-align:center">Start Time</th>
              <th style="text-align:center">Winner</th>
              <th style="text-align:center">Venue</th>
            </tr>
          </thead>
          <tbody id="scoreboardBody">

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <p id="test"></p>

  <script type="text/javascript">
    $(document).ready(function() {
      var departmentName = {!!json_encode($department_name) !!};
      var departmentId = {!!$department_id!!}
      $.ajax({
        url: '../api/events/day/-1/department/'+departmentName,
        type: 'GET',

        success: function(data) {
          console.log(data);
          for(var x in data) {
            if(data[x].department == null) {
              data[x].department = {department_name: "---"}
            }
            if(data[x].status == "c") {
              data[x].start_time = "Completed";
            }
            if(data[x].status == "l") {
              data[x].start_time = "Live";
            }
            if(data[x].participants.length == 2) {
              $('#scoreboardBody').append(
                  "<tr>"+
                    "<td>"+data[x].name+" "+data[x].participants[0]+" vs "+data[x].participants[1]+"</td>\
                    <td>"+data[x].start_time+"</td>\
                    <td>"+data[x].department.department_name+"</td>\
                    <td>"+data[x].venue+"</td>\
                  </tr>"
                );
            }
            else {
              $('#scoreboardBody').append(
                  "<tr>"+
                    "<td>"+data[x].name+"</td>\
                    <td>"+data[x].start_time+"</td>\
                    <td>"+data[x].department.department_name+"</td>\
                    <td>"+data[x].venue+"</td>\
                  </tr>"
                );
            }
          }
        },
        error: function(data) {
          console.log(data);
        }
      })
    })
  </script>
