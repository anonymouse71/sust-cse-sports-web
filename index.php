<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SUST CSE Sports</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
	<link href="css/camera.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

   

</head>

<body>

    <!-- Navigation -->
	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">SUST CSE SPORTS</a>
            </li>
            <li>
                <a href="#">Main Page</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="sps.php">Sports Secretary</a>
            </li>
			
			
          
			<li>
                <a href="football.php">Cricket</a>
            </li>
			
			
			<li>
                <a href="football.php">Football</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
			
    </nav>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
      

		

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
		
		  
            <div class="item active">

			
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/img1.JPG');"></div>
                <div  class=" "><h1> AEYgh</h1></div>
                <div class="carousel-caption">
                    <h1> SUST CSE Sports</h1>
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/img2.jpg');"></div>
                <div class="carousel-caption">
                     <h1> SUST CSE Sports</h1>
                    <h2>Caption 2</h2>

                </div>
            </div>

           


			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/img4.jpg');"></div>
                <div class="carousel-caption">
                     <h1> SUST CSE Sports</h1>
                    <h2>Caption 3</h2>
                </div>
            </div>
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/img5.jpg');"></div>
                <div class="carousel-caption">
                     <h1> SUST CSE Sports</h1>
                    <h2>Caption 4</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
      <!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a> -->

    </header>

   














   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
<script src="js/camera.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 1000 //changes the speed
    });
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
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 5000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>