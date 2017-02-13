<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Countdown</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/secret/icon.png" />

    <!-- Custom CSS -->
    <link href="css/countdown.css" rel="stylesheet">
    <link href="css/animation.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div id="animation">
    <div id="traveler">
      <div id="bouncer"></div>
    </div>
  </div>
    <div class="container" style="z-index: 200;text-align: center;">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="heading">SPORTSFETE 2017</h3>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <img class="img-responsive" id="logo" src="./img/logo.png" style="width:60%;height:30%;margin-top:-9%;margin-left:auto;margin-right:auto;">
            </div>
        </div>
        
        <div id="clockdiv" class="row" style="margin-top:-9%;margin-left:auto;margin-right:auto;">
                  <div class="col-sm-3">
                      <span class="days"></span>
                      <div class="smalltext">Days</div>
                  </div>
                  <div class="col-sm-3">
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                  </div>
                  <div class="col-sm-3">
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                  </div>
                  <div class="col-sm-3">
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                  </div>
                  <br><br><br/>
          <a href="events.html" class="btn">Check Out the events</a>
    </div>
          <br/><br/>
          <div class="row">
            <img src="./img/spider.jpg" style="width: 37px;height: 37px;border-radius: 50%;" />
            <br><p id="spider">Designed by <b>Spider</b></p>
          </div>

    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
      function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }

    function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.days');
      var hoursSpan = clock.querySelector('.hours');
      var minutesSpan = clock.querySelector('.minutes');
      var secondsSpan = clock.querySelector('.seconds');

      function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }

    //var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
    var deadline = "Tue Feb 23 2017 06:00:00 GMT+0530 (IST)";

    initializeClock('clockdiv', deadline);

</script>
</body>

</html>
