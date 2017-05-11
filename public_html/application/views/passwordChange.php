<?php include "loginHeader.php";?>


    <div class="content-section-a" id="aboutSection">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                		<h1>Change Password</h1>
						<?php
							echo form_open('main/passwordChange_validation');
							echo validation_errors();
							echo "<p>Old Password:";
							echo form_password('old_password_check');
							echo "</p>";
							echo "<p>New Password:";
							echo form_password('new_password');
							echo "</p>";
							echo "<p>Reenter New Password";
							echo form_password('new_password2');
							echo "</p>";
							echo form_submit('passwordChange_submit', 'change password');
							echo "</p>";
							echo form_close();
						?>

           		</div>
           		
        	</div>
       </div>
       <?php echo $this->session->flashdata('msg'); ?>
   	</div>


<?php include "loginFooter.php";?>