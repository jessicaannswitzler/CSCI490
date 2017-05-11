<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ("loginHeader.php");
?>

	<title>Members</title>


	<a id = "logout" href = '<?php echo base_url() . "main/logout" ?>' > Logout </a>
</div>

    <div class="content-section-a" id="aboutSection">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                		<h1>Members Page</h1>
						<?php
							echo "<pre>";
							print_r($this -> session -> all_userdata());
							echo "</pre>";

						?>
           		</div>

        	</div>
       </div>
   	</div>
<?php include "loginfooter.php";?>