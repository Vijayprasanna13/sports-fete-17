<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sportsfete</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/index.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="continuous()">

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a class="menulinks" href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a class="menulinks" href="gallery.html">Photos</a>
            </li>
            <li>
                <a class="menulinks" href="/events" >Events</a>
            </li>
            <li>
                <a class="menulinks" href="/scoreboard">Scoreboard</a>
            </li>
            <li>
                <a class="menulinks" href="/contacts" >Contacts</a>
            </li>
            <li>
                <a class="menulinks" href="#leaderboard" onclick=$("#menu-close").click();>Leaderboard</a>
            </li>
            <li>
                <a class="menulinks" href="#upcomingevents" onclick=$("#menu-close").click();>Upcoming events</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
   
    <div id="top" class="headerslides" style="background-image:url('images/image4.jpg');">
       <div class="text-vertical-center" style="z-index:4;color:white;">
            <h1>Sportsfete'17</h1>
        </div>              
    </div>
    <div id="top" class="headerslides" style="background-image:url('images/image5.jpg');">
        <div class="text-vertical-center" style="z-index:4;color:white;">
            <h1>Sportsfete'17</h1>
        </div>  
    </div>   
    <div id="top" class="headerslides" style="background-image:url('images/image6.jpg');">
        <div class="text-vertical-center" style="z-index:4;color:white;">
            <h1>Sportsfete'17</h1>
        </div>  
    </div>   
    
    <div id="top" class="headerslides" style="background-image:url('images/image7.jpg');">
        <div class="text-vertical-center" style="z-index:4;color:white;">
            <h1>Sportsfete'17</h1>
        </div>     

    </div>
    
    <br>
    <div class="dots" style="text-align:center;">
        <span class="dot" onclick="particular(1)"></span> 
        <span class="dot" onclick="particular(2)"></span> 
        <span class="dot" onclick="particular(3)"></span> 
        <span class="dot" onclick="particular(4)"></span>
        
    </div>
    

    
    <section id="leaderboard" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <span id="leadheading"><h2><b>Leaderboard</b></h2>
                    <b><hr class="small"></b></span>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <img src="images/leaderboard.png" class="img-responsive">    
                        </div>
                        <div class="col-md-9 col-sm-6">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Department</th>
                                        <th>Score</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>CSE</td>
                                        <td>89</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>EEE</td>
                                        <td>56</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>ECE</td>
                                        <td>54</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    
    
   
 
    <section id="upcomingevents" class="upcomingevents">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Upcoming events</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/upcoming_events.jpg">
                            
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!--<h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>-->

                    <img src="images/spider.png" style="width: 50px;height: 40px;border-radius: 50%;"  />
                    <br><p id="spider">Designed by <b>Spider</b></p>
          

                </div>
            </div>
        </div>
    </aside>
    <a id="to-top" href="#" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>

   
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;var timer;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) 
    {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) 
    {
        showSlides(slideIndex = n);
    }

    function showSlides(n) 
    {
        var i;
        var slides = document.getElementsByClassName("headerslides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length} ;
        for (i = 0; i < slides.length; i++) 
        {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) 
        {
            dots[i].classList.remove("active");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].classList.add("active");
    }
    /*function showSlides(n) 
    {
        var i;
        var bgs=["url(images/image4.jpg)","url(images/image5.jpg)","url(images/image6.jpg)","url(images/image7.jpg)"];
        
        var dots = document.getElementsByClassName("dot");
        if (n > bgs.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = bgs.length} ;
        document.getElementById('top').style.backgroundImage=bgs[slideIndex-1]; 
        
        for (i = 0; i < dots.length; i++) 
        {
            dots[i].classList.remove("active");
        }
        //slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].classList.add("active");
    }*/
    function change()
    {
        slideIndex+=1;

        showSlides(slideIndex);
    }
    function continuous()
    {
        timer=setInterval(change,3000);
    }
    function particular(n)
    {
        clearInterval(timer);
        currentSlide(n);
        //setTimeout(continuous,4000);
        continuous();
    }
    </script>

</body>

</html>
