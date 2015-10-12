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

   



<!-- style sheet -->
<style >
.table td  {
   text-align: center;   
}
.table th  {
   text-align: center;   
}
a {
    color: inherit;
}

a:hover {
    font-weight: bold;
    color: white;
}

a.developerID:hover {
    font-weight: bold;
    color: black;
}

	
</style>


<!-- End of style sheet -->

 <button type="button" class="btn btn-success btn-lg btn-block">
     <h2>SUST CSE Football Tournament 2014 Results</h2>
	
   </button>
 <br>
 <br>
 
<!-- last year statistics -->

     
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
            <!-- <h1 style="font-size:40px"  id="navbar" align=center >SUST CSE Cricket Tournament 2014 Results:</h1> -->
               <div class="well well-sm col-md-8 col-md-offset-2" align=center style="font-size:35px">
		      <b>Champion:</b> CSE 2013 Batch </b>
              </div>
              
              <div class="well well-sm col-md-5 col-md-offset-3" align=center style="font-size:18px">
		      <b>Runner-Up:</b> CSE 2012 Batch 
             </div>
			 <div class="well well-sm col-md-5 col-md-offset-4" align=center style="font-size:18px">
		        <b>Man of the Final:</b> CSE 2013 Batch  
              </div>
			  
			
			 <div class="well well-sm col-md-5 col-md-offset-4" align=center style="font-size:18px">
		       <b>Best Goal: </b>CSE 2013 Batch 
              </div>
			   <div class="well well-sm col-md-5 col-md-offset-3" align=center style="font-size:18px">
		     <b>  Most Goal:<b> CSE 2013 Batch 
              </div>
		
            </div>

          </div>
        </div>
      </div>


<!-- End of last year statistics -->



<br>
 <br>
 <br>
 


 
 

<button type="button" class="btn btn-success btn-lg btn-block">
     
Copyright &copy; <b>SUST CSE Sports </b>2015
	
   </button>

   
   
	
    

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
