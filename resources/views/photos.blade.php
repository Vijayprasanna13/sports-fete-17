<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photos</title>
    <link rel="shortcut icon" href="images/secret/icon.png" />
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/photos.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">



    <style media="screen">
      body {
        background-color: #D4E6F1;
        color: #212121;
      }
      #container {
        width: 100%;
        height: 100vh;
      }
    </style>
    <link rel="stylesheet" href="/css/jquery.galereya.css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="/css/jquery.galereya.ie.css">
    <![endif]-->
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    <!--<li>
                        <a href="about.html">About us</a>
                    </li>-->
                    <li class="menulinks">
                        <a href="/">Home</a>
                    </li class="menulinks">
                    <li class="menulinks">
                        <a href="/events">Events</a>
                    </li>
                    <li class="menulinks">
                        <a href="/scoreboard">Scoreboard</a>
                    </li>
                    <li class="menulinks">
                        <a href="/contacts">Contacts</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div id="container">
<div id="gallery" style="padding-top: 5vh;">
  <!-- Load images from images directory -->
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.galereya.js"></script>
<script type="text/javascript">
  $(function() {
    $('#gallery').galereya({
      load: function(next) {
        $.getJSON('/api/images', function(data) {
          console.log(data);
          next(data);
        });
      },
      slideShowSpeed: 3000
    });
  });
</script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84082034-2', 'auto');
  ga('send', 'pageview');

</script>