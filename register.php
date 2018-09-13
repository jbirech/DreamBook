
<?php  

require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>


<html>
<head>
	<title>Dreambook</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
	
</head>
<body>
	<?php 
	if(isset($_POST['register_button'])) {
		echo '
		<script>

		$(document).ready(function() {
			$("#first").hide();
			$("#second").show();
		});
		
		</script>
		';
	}
	?>

	<!-- header section for just the log in part  -->
	<!-- <header>
		<div class="login">
			<form action="register.php" method="POST">
				<input type="email" name="log_email" placeholder="Email Address" value="
				<?php
				//if(isset($_SESSION['log_email']))
				//	echo $_SESSION['log_email'];  
				?>" required><br>

				 password section-->
				<!-- <input type="password" name="lo_password" placeholder="password">
				<br>
				<input type="submit" name-"lodgin_button" value="login">
				<br> -->
				<?php //if(in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>";?>
			<!-- </form>
		</div>
	</header> --> 

	<!-- end of the header section -->

	<div class="wrapper">
		
		<div class="login_box">

			<div class="login_header">
				<h1>Dreambook</h1>
				Login or Sign up below for free!
			</div>
			<div id="first">

				<form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder="Email Address"value="<?php 
					if(isset($_SESSION['log_email'])) 
					{
						echo $_SESSION['log_email'];
					} 
					?>" required>
					<br>

					<input type="password" name="log_password" placeholder="password">
					<br>
					<input type="submit" name="login_button" value="login">
					<br>
					<!-- if(in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>";  -->

					<!-- Display an error message if the email or password entered does not match the one in the database -->
					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>";?> 
					<a href="#" id="signup" class="signup">Don't have an account? Register here!</a>

				</form>
			</div>
			<div id="second">

				<form action="register.php" method="POST">
					<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					}
					?>" required>
					<br>
					<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
				
					<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

					<input type="email" name="reg_email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" required>
					<br>

					<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
					else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


					<input type="password" name="reg_password" placeholder="Password" required>
					<br>
					<input type="password" name="reg_password2" placeholder="Confirm Password" required>
					<br>
					<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
					else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
					else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>


					<input type="submit" name="register_button" value="Register">
					<br>

					<?php if(in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
					<a href="#" id="signin" class="signin">Already have an account? signin here!</a>
				</form>
			</div>  
		</div>

	</div>

	<!-- footer section contains some important informations such as privacy policies, cookies, developers section, api's, about page, careers, etc -->
	<footer>
		<div class="footer_area">
			<ul>
				<li>
					<a href="privacy_policies.html" title="privacy policy"></a>
				</li>
				<li>
					<a href="About.html" title="About"></a>
				</li>
				<li>
					<a href="Developers.html" title="Developers"></a>
				</li>
				<li>
					<a href="Mobile.html" title="Mobile App"></a>
				</li>
			</ul>
		
		</div>
	</footer>

	<!-- End of footr area -->

</body>
</html>
