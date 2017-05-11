<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ("loginHeader.php");
?>

	<title>Upload</title>


	<a id = "logout" href = '<?php echo base_url() . "main/logout" ?>' > Logout </a>

    <div class="content-section-a" id="aboutSection">

        <div class="container" style = "padding-bottom:10%;>

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                	<h3>Upload</h3>


                              <!--echo $error;// Error message here -->
                              <?php echo form_open_multipart('uploader/do_upload');?>

                              <input type='file' name='userfile' size='20'/>
                              <input type='submit' name='submit' value='upload'/>

                             </form>
           		</div>

        	</div>
        <?php echo $this->session->flashdata('msg'); ?>
       </div>
   </div>
<?php include "loginFooter.php";?>