<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>50 Shades of Pain</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jssor.slider-22.1.8.min.js" type="text/javascript"></script>

    <style>
       #map {
        height: 400px;
        width:60%;
       }
       
       #mapText-right {
        position: absolute;
        display: inline;
       }
       
       .dropdown {
          padding-top: 10px;
          padding-bottom: 10px;
        }
        
        #galleryText-right {
         position: absolute;
         display: inline;
        }
    </style>
    
</head>

<body>

    <!-- Navigation -->
<div id = "container" style = "width:100%">
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" >
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav pull-right">
                  <li style="padding-top:5px; display:inline;" id="menuLogin">

                    <a href="<?php echo base_url();?>index.php/main/login" id="navLogin" style= "color: white;">Login</a>
                    <div class="dropdown-menu" style="padding:17px;">
                        <button type="button" id="btnLogin" class="btn">Login</button>
                      </form>
                    </div>
                  </li>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" style="position:center" type="button" data-toggle="dropdown">Artists
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>index.php/main/ron">Ron</a></li>
                            <li><a href="<?php echo base_url();?>index.php/main/kent">Kent</a></li>
                            <li><a href="<?php echo base_url();?>index.php/main/tiny">Tiny</a></li>
                          </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/main/landingpage#map" id="mapButton" style= "color: white;">Our Shop</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/main/landingpage#about" id="aboutTopButton" style= "color: white;">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/main/tattoocare"  style= "color: white;">Tattoo Care</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/main/painModel" style= "color: white;">Pain Model</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
    <!-- Header -->

    <div class="intro-header" style = "background-color: black;">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message" style = "width:100%">
                        <h1>50 Shades of Pain</h1>
                        <h3>Tattoo Shop</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://www.facebook.com/50-Shades-of-Pain-122999127794199/" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- Page Content -->

    <div class="content-section-b" id="mapSection">

        <div class="container">

            <div class="row">
			  <div style="float:left;" id="map">
				<!-- <img class="img-responsive" id="map" alt=""> -->
				
				<script>
				  function initMap() {
					var uluru = {lat: 39.0769, lng: -108.5170};
					var map = new google.maps.Map(document.getElementById('map'), {
					  zoom: 14,
					  center: uluru
					});
					var marker = new google.maps.Marker({
					  position: uluru,
					  map: map
					});
				  }
				</script>
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcjPXSLQ7eCZTwgoc8UJq8-XluMfhVKI4&callback=initMap"></script>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-push-6  col-sm-6" id="mapText-right" style="padding-left:20px;">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Location & Hours</h2>
                    <p class="lead">2889 North Ave Suite 4</p> 
					<p class="lead"> Grand Junction, CO 81501</p>
					<p class="lead">(970) 361-7612</p>
					<p class="lead">12:00PM - 7:30PM</p>
                </div>
                
            </div>

        </div>
        <!-- /.container -->

    </div>

    <!-- /.content-section-a -->

    <div class="content-section-a" id="aboutSection" style = "background-color: white;">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About Us</h2>
                    <p class="lead">50 Shades of Pain is Grand Junction's premier tattoo parlor. We 
                    specialize in all types of tattoos, air brushing, and custom artwork. We take pride in the
                    quality of our work. You do not just have to take our word for it though, you can view some 
                    of our customer testimonials on our facebook page. It is linked at the bottom and top of our website.
                     So, if you are looking for a quality tattoo schedule an 
                    appointment with us and we will take care of you.
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img  src="<?php echo base_url();?>/assets/img/about.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <!-- /.content-section-a -->
        <a  name="About"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect With Us!</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                                <a href="https://www.facebook.com/50-Shades-of-Pain-122999127794199/" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->
    <!-- Footer -->
    <footer style = "background-color: black;">
        <div class="container" style = "background-color: black">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="<?php echo base_url();?>index.php/main/landingPage" style= "color: white;">Home</a>
                        </li>
                        <li class="footer-menu-divider" style= "color: white;">&sdot;</li>
                        <li>
                            <a href="#map" style= "color: white;">Our Shop</a>
                        </li>
                        <li class="footer-menu-divider" style= "color: white;">&sdot;</li>
                        <li>
                            <a href="#about" style= "color: white;">About</a>
                        </li>
                        <li class="footer-menu-divider" style= "color: white;">&sdot;</li>
                        <li>
                        <a href="<?php echo base_url();?>index.php/main/tattoocare" style= "color: white;">Tattoo Care</a>
                        </li>
                        <li class="footer-menu-divider" style= "color: white;">&sdot;</li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/main/painModel" style= "color: white;">Pain Model</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; 50 Shades of Pain 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/startbootstrap-landing-page-gh-pages/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/startbootstrap-landing-page-gh-pages/js/bootstrap.min.js"></script>

</body>

<script>
    $("#aboutTopButton").click(function() {
    $('html,body').animate({
        scrollTop: $("#aboutSection").offset().top - 50},
        'slow');
    });
    
    
    $("#mapButton").click(function() {
    $('html,body').animate({
        scrollTop: $("#mapSection").offset().top - 50},
        'slow');
    });
</script>

</html>