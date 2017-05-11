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
    <link href="<?php echo base_url();?>/assets/startbootstrap-landing-page-gh-pages/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/startbootstrap-landing-page-gh-pages/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>/assets/startbootstrap-landing-page-gh-pages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <a href="<?php echo base_url();?>index.php/main/landingpage#gallery" id="galleryTopButton" style= "color: white;">Gallery</a>
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
                    quality of our work. You do not just have to just take our word for it though, you can view some 
                    of our customer testimonials on our facebook page. It is linked at the bottom and top of our website.
                     So if you are looking for a quality tattoo, schedule an 
                    appointment with us and we will take care of you.
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img  src="<?php echo base_url();?>/assets/img/about.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
	<div id="gallery">
	<div class="content-section-d" style = "padding-bottom: 5%;">
        <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: false,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('<?php echo base_url();?>assets/img/fullSlider/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 60px;
            height: 58px;
            color: black;
            cursor: pointer;
            background: url('<?php echo base_url();?>assets/img/fullSlider/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;padding-left:30%;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>

        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;text-align:center; width:500px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url();?>assets/img/fullSlider/shop1.jpg" /> 
            </div>
            <div>
                <img data-u="image" style = "width: 100%; height: auto; display: inline-block; " src="<?php echo base_url();?>assets/img/fullSlider/shop2.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>assets/img/fullSlider/shop3.jpg" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>

    </div>
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
                            <a href="#gallery" style= "color: white;">Gallery</a>
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
    
    $("#galleryTopButton").click(function() {
    $('html,body').animate({
        scrollTop: $("#gallery").offset().top - 50},
        'slow');
    });
    
    $("#mapButton").click(function() {
    $('html,body').animate({
        scrollTop: $("#mapSection").offset().top - 50},
        'slow');
    });
</script>

</html>