<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/stylish-portfolio.css" rel="stylesheet">
	    <link href="css/camera.css" rel="stylesheet">
         <!-- END OF CSS -->
    

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
                <a href="index.php">Main Page</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="sps.php">Sports Secretary</a>
            </li>
            <li>
                <a href="cricket.php">Cricket</a>
            </li>
			<li>
                <a href="football.php">Football</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
			
        </ul>
    </nav>

	<!-- End of Navigation -->
	
	<button type="button" class="btn btn-success btn-lg btn-block">
        <h2>SUST CSE Football</h2>
    </button>
   

        
        

        <!-- Countdown -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>NEXT FOOTBALL TOURNAMENT</h2>
                            
                            <div class="timer">
                                <div class="days-wrapper">
                                    <span class="days"></span> <br>days
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span> <br>hours
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span> <br>minutes
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span> <br>seconds
                                </div>
                            </div>
							
							
							
							<br>
							<br>
							<br>
							<br>
						    <br>
							<br>
							<br>
							<br>
							
				<button type="button" class="btn btn-info" onclick="window.location.href='lf.php'">Football Tournament 2014</a> </button>
				
							<br>
				            <br>
					<button type="button" class="btn btn-danger btn-lg btn-block" onclick="window.location.href='ft.php'">  Football Tournament 2015  
			        </button>
			
                </div>
            </div>
        </div>
    </div>
</div>



        <!-- Content -->
		

	<!--	
		<button type="button" class="btn btn-success btn-lg btn-block">
     
Copyright &copy; <b>SUST CSE Sports </b>2015
	
   </button> -->

   
        
        <!-- Modified Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/scripts.js"></script>
	    <script src="js/camera.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.min.js"></script>

   
        
        
		
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
        $('a[href*=#]:not([href=#])').click(function() {
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
       </script>

    </body>

</html>