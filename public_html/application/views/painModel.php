<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Pain Model</title>
<meta name="generator" content="Geany 1.28" />


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/startbootstrap-landing-page-gh-pages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
    <link rel= "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/painModel/css/painModel.css">
    
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
		
    </style>
</head>

<body>
<div style="width: 100%; height: 10%;">>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" >
        <div class="container topnav" style="width: 100%; height: 10%;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<ul class="nav navbar-nav pull-right">
				  <li>
					<div class="btn">
						<button  type="button" id="maleOrFemaleButton" class="btn btn-primary"> Switch Gender </button>
					</div>
				  </li>
				</ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="btn">
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
						<a href="<?php echo base_url();?>index.php/main/landingPage" id="mapButton" style= "color: white;">Home</a>
					</li>
					<li>
                        <a href="<?php echo base_url();?>index.php/main/tattoocare"  style= "color: white;">Tattoo Care</a>
                    </li>
					<li>
                        <a href="<?php echo base_url();?>/index.php/main/painModel" style= "color: white;">Pain Model</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>

<div id = "mainContainer">
	<div id = "painModelContainer">
		<div id = "painModel">
			<div id = "frontFacingModel" class = "model">
				<img id = "frontModel" style = "width: 100%; height: 100%;" src = "<?php echo base_url();?>assets/painModel/img/">
			</div>
			<div id = "backFacingModel" class = "model">
				<img id = "backModel" src = "<?php echo base_url();?>assets/painModel/img/">
			</div>
		</div>
	</div>
	<div class = "container">
		<div id = "painLevelContainer">
			<div id = "lowPainLevelTitle">LOWEST PAIN
			</div>
			<div id = "painLevel">
				<img src = " <?php echo base_url();?>assets/painModel/img/painLevel.png"  id = "painLevelImage">
				<div id = "painLevelYellow" class = "colorScale"></div>
				<div id = "painLevelOrange" class = "colorScale"></div>
				<div id = "painLevelRed" class = "colorScale"></div>
				<div id = "painLevelViolet" class = "colorScale"></div>
			</div>
			<div id = "highPainLevelTitle">HIGHEST PAIN
			</div>
		</div>
		<div id = "painFacesContainer">
			<div id = "painFacesTitle">Scroll over temperature bar for illustration!</div>
			<div id = "painFaces">
					<div id = "faceYellow" class = "faceScale"></div>
					<div id = "faceOrange" class = "faceScale"></div>
					<div id = "faceRed" class = "faceScale"></div>
					<div id = "faceViolet" class = "faceScale"></div>
			</div>
		</div>
	</div>
</div>
 <!--Footer -->
 <div  >
    <footer style = "background-color: black; width: 100%; height: 10%; position: fixed; bottom: 0; padding: 0;">
        <div class="container" style = "background-color: black; width: 100%;">
            <div class="row" style="margin-left: 0; margin-right: 0;>
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="<?php echo base_url();?>index.php/main/landingPage" style= "color: white;">Home</a>
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
 </div>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/startbootstrap-landing-page-gh-pages/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/startbootstrap-landing-page-gh-pages/js/bootstrap.min.js"></script>
    <!-- Adding in scripts for the pain model -->
    <script src= "<?php echo base_url();?>/assets/painModel/three.js-master/build/three.js"></script>
	<script src = "<?php echo base_url();?>/assets/painModel/three.js-master/build/OBJLoader.js"></script>
	<script src = "<?php echo base_url();?>/assets/painModel/three.js-master/build/Detector.js"></script>
	<script src = "<?php echo base_url();?>/assets/painModel/three.js-master/build/CanvasRenderer.js"></script>
	<script src = "<?php echo base_url();?>/assets/painModel/three.js-master/build/MTLLoader.js"></script>
	<script src = "<?php echo base_url();?>/assets/painModel/painModel.js"></script>
	
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