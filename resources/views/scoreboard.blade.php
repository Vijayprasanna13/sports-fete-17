<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scoreboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/score.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>
    <script src='/js/scoreboard.js'></script>

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
                        <a href="/scoreboard">Scoreboard</a>
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
    <!-- Page Content -->
    <div class="container" id="pagecontent">



        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                Scoreboard
                </h1>

            </div>
        </div>
        <table class="table table-striped text-center table-hover" id="scoreboard">
            <thead>
                <tr>
                    <th style="text-align: center">Event</th>
                    <th style="text-align: center">Winner</th>
                </tr>
            </thead>
            <tbody id="scoreboard_body">
              
            </tbody>
        </table>





        <!-- Pagination -->

        <!-- /.row -->


    </div>
    <!-- /.container -->

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>
