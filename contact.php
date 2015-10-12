<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SUST CSE SPORTS</title>

    <!-- Bootstrap Core CSS -->
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
                             <h2>CONTACT</h2>
							 
                               </button>

   
		 <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                   
					          
                    <p><b>S</b>hahjalal <b>U</b>niversity of <b>S</b>cience & <b>T</b>echnology,Sylhet<br>Department of Computer Science & Engineering</p>
					<p>A Building. Postal Code-3114</p>
					
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (+880) 1967402131</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:talqc@gmail.com">SUST CSE Sports</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
						<li>
                               <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus fa-fw fa-3x"></i></a>
                        </li>
                        
						
						
                                 
                    </ul>
					<br>
					<br>
					 <br>
					 
					
					
					 
					  
                  <hr class="small">
                   <center> <p class="text-muted">Copyright &copy; <b>SUST CSE Sports </b>2015</p> </center>
  
                </div>
            </div>
        </div>
    </footer>
 

    

    <!-- jQuery -->
	 <script src="js/camera.min.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
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
