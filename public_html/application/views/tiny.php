<?php include "header.php"; ?>

   <!-- ARTIST IMAGE AND NAME TAG -->
	<link href="<?php echo base_url();?>assets/css/gallery.css" rel= "stylesheet">
	<script type="text/javascript" src = "<?php echo base_url();?>assets/js/gallery.js"></script>
	<div class="content-section-a" style = "background-color: black">

        <div class="container" style="width: 100%; height: 50%;">

            <img class="center-block" src="<?php echo base_url();?>assets/img/artistBioPictures/tinyBioImage.png"  style = "height: 25%; width: 25%; padding-top: 25px; padding-bottom: 0px;" >
        </div>
        <div class = "container" style="width: 100%; height: 50%;">
        	<h1 style="color: white; text-align: center;">TINY</h1>
        </div>
    </div>

    <!-- IMAGE GALLERY-->
	<div class="content-section-a" style = "background-color: black">
        <div class="galcontainer" id="imageSlider">
				<div class="galrow">
				  	<?php
				  		$base = base_url();
				  		$count = 1;
						if ($handle = opendir('img/TinysGallery')) {

							while (false !== ($entry = readdir($handle))) {
								$files[] = $entry;
							}
							$images=preg_grep('/\.(jpg|jpeg|png)$/i', $files);

							foreach($images as $image)
							{
							echo '<div class = "galcolumn"><img src = "'.base_url().'img/TinysGallery/'.$image.'"onclick = " openModal();currentSlide('.$count.')" class = "hover-shadow"></div> ';
							$count++;
							}
							closedir($handle);
						}
					?>
				</div>
				<div id="myModal" class="modal">
				  <span class="close cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content">
					<?php
						$base = base_url();
						if ($handle = opendir('img/TinysGallery')) {

							while (false !== ($entry = readdir($handle))) {
								$files[] = $entry;
							}
							$images=preg_grep('/\.(jpg|jpeg|png)$/i', $files);

							foreach($images as $image)
							{
							echo '<div class = "mySlides" style = " background-color: black"><img src = "'.base_url().'img/TinysGallery/'.$image.'" style = "width: 50%;"></div> ';
							}
							closedir($handle);
						}
					?>

				    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				    <a class="next" onclick="plusSlides(1)">&#10095;</a>
 
				</div>

        </div>

	<!-- CONTACT FORM-->
	<div class="content-section-b">

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
            echo form_open("ContactForm/index", $attributes);?>
            <fieldset>
            <legend>Contact Tiny</legend>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="name" class="control-label">Name</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="email" class="control-label">Email</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="email" placeholder="Your Email" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="subject" class="control-label">Subject</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="subject" placeholder="Your Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="message" class="control-label">Message</label>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Your Message"><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                </div>
            </div>
            <input class="form-control" name="to"  type="hidden" value = "gbumproductions@yahoo.com" />
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
<?php include "footer.php"; ?>