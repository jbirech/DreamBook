<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>
<head>
	<title>Safar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
<!--Set up a mini search engine -->
<header class="header_search">
	<div class="safar_logo">
		<h1>
		Safar
		</h1>
	</div>
	<div class="logo">
		<ul class="site_details">
			<li>About</li>
		</ul>
	</div>

	<div class="logo">
		<ul class="site_details">
			<li>Community</li>
		</ul>
	</div>

	<div class="logo">
		<ul class="site_details">
			<li>Help</li>
		</ul>
	</div>

	<div class="searchContainer">
		<form action="Search/search.php" method="GET">
		
			<input class="searchBox" type="text" name="term" placeholder="search from the web...">
			<input class="searchButton" type="submit" value="Search">
		
		</form>

	</div>
</header>


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

	<div class="wrapper">

		<div class="login_box">

			<div class="login_header">
				<h1>Safar</h1>
				<!-- Login or sign up below! -->
			</div>
			<br>
			<div id="first">

				<form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder="Email Address" value="<?php 
					if(isset($_SESSION['log_email'])) 
					{
						echo $_SESSION['log_email'];
					} 
					?>" required>
					<br>
					<input type="password" name="log_password" placeholder="Password">
					<br>
					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
					<input type="submit" name="login_button" value="Log in">
					<br>
					<a href="#" id="signup" class="signup">Don't have  an account yet? Register here it's free!</a>

				</form>

			</div>

			<div id="second">

				<form action="register.php" method="POST">
					<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) 
					{
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

					<?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
					<a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
				</form>
			</div>

		</div>

	</div>
<hr>

<!-- privacy policy, developers, cookies, etc-->
<div class="extra_details">
	<div class="f_details">
		<div class="footerDetails">
			<ul class="list_items">
				<li>
					<a href="extras/privacy_policy.php">Privacy Policy</a>
				</li>
			</ul>
		</div>

		<div class="footerDetails">
			<ul class="list_items">
				<li>
				<a href="#">Cookies Policy</a>
				</li>
			</ul>
		</div>

		<div class="footerDetails">
			<ul class="list_items">
				<li>
				<a href="extras/Developers.php">Developers</a>
				</li>
			</ul>
		</div>

		<div class="footerDetails">
			<ul class="list_items">
				<li>
				<a href="#">Mobile App</a>
				</li>
			</ul>
		</div>

		<div class="footerDetails">
			<ul class="list_items">
				<li>
				<a href="">Feature Ideas</a>
				</li>
			</ul>
		</div>

		<div class="footerDetails">
			<ul class="list_items">
				<li>
				<a href="extras/About.php">About</a>
				</li>
			</ul>
		</div>

		<div class="footerDetails">
			<ul class="list_items">
				<li>
				<a href="#">Terms</a>
				</li>
			</ul>
		</div><hr>

	</div>
	<div class="copyright">
		<span> Dreambook © 2018</span>
	</div>
</div>

</body>
</html>