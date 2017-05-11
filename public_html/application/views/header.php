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
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jssor.slider-22.1.8.min.js" type="text/javascript"></script>

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
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
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
				  <li style="padding-top:5px;" id="menuLogin">
					<a href="<?php echo base_url();?>index.php/main/login" id="navLogin" style= "color: white;"></a>
					<div class="dropdown-menu" style="padding:17px;">
						<button type="button" id="btnLogin" class="btn">Login</button>
					  
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
						<a href="<?php echo base_url();?>index.php/main/landingpage" id="mapButton" style= "color: white;">Home</a>
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