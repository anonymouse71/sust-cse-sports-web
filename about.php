<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SUST CSE SPORTS</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

	
	
	
	
	<button type="button" class="btn btn-success btn-lg btn-block">
     <h2>SUST CSE Sports</h2>
	
   </button>


    <!-- container -->
	
    <section class="container">
        <div class="row">
            <!-- main content -->
			<center>
            <section class="col-sm-12 maincontent">
			    <br>
				<br>
				<br>
				
			    <h1><kbd>Who We Are!!<kbd></h1>
                
                <p>
				<br>
				<br>
				<br>
				<br>
				<br>
				    <img src="img/about1.jpg" alt="" class="img-rounded pull-left" width="200">
                    <img src="img/about2.jpg" alt="" class="img-rounded pull-right" width="200">
                   
                </p>
				
                <br>
				<br>
				
			       <p><span>We are the students of Computer Science and Engineering Department<br> at Shahjalal University of Science & Technology, Sylhet(SUST).</span></p>
                    <p><span>And We Love Sports </span></p>
				<br>
				<br>
				<br>
				<br>
				
			<!--	<h2><kbd>Our Achievements<kbd></h2>
                <strong>2014</strong>
                <p>Cricket: N/A <br> Footbal:N/A <br> Basketball: N/A <br> Handball: N/A <br> Others: N/A</p>
                
				<strong>2013</strong>
                <p>Cricket: N/A <br> Footbal:N/A <br> Basketball: N/A <br> Handball: N/A <br> Others: N/A</p>
				
				<strong>2012</strong>
                <p>Cricket: N/A <br> Footbal:N/A <br> Basketball: N/A <br> Handball: N/A <br> Others: N/A</p>

				
			    <strong>2011</strong>
                <p>Cricket: N/A <br> Footbal:N/A <br> Basketball: N/A <br> Handball: N/A <br> Others: N/A</p>
				-->
         </section>
   
                    <br>
					<br>
					<br>
	                <br>
					<br>
					<br>
					<br>
                   <hr class="small">
                   <center> <p class="text-muted">Copyright &copy; <b>SUST CSE Sports </b>2015</p> </center>
    

    <!-- jQuery -->
	 <script src="js/camera.min.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap  JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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
