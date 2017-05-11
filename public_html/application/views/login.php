<?php include "header.php";?>


    <div class="content-section-a" id="aboutSection" style = "width: 100%;">

        <div class="container" style = "padding-right: 80%; padding-bottom: 5%">

            <div class="row">
                <div class="col-lg-5 col-sm-6" >
                		<h3>Login</h3>
						<?php
							echo form_open('main/login_validation');
							echo validation_errors();
							echo "<p>Email:";
							echo form_input('email');
							echo "</p>";
							echo "<p>Password:";
							echo form_password('password');
							echo "</p>";
							echo "<p>";
							echo form_submit('login_submit', 'login');
							echo "</p>";
							echo form_close();

						?>
           		</div>

        	</div>
       </div>
   	</div>


<?php include "loginFooter.php";?>