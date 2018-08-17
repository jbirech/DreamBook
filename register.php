<!-- # **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    register.php                                       :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: jobirech <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/08/17 00:09:56 by jobirech          #+#    #+#              #
#    Updated: 2018/08/17 00:10:25 by jobirech         ###   ########.fr        #
#                                                                              #
# **************************************************************************** # -->

<?php  

require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>


<html>
<head>
	<title>Dreambook</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
</head>
<body>
	<div class="wrapper">
		<form action="register.php" method="POST">
			<input type="email" name="log_email" placeholder="Email Address"value="<?php 
			if(isset($_SESSION['log_email'])) {
				echo $_SESSION['log_email'];
			} 
			?>" required>
			<br>

			<input type="password" name="log_password" placeholder="password">
			<br>
			<input type="submit" name="login_button" value="login">
			<br>
			<?php if (in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>"?>
		</form>

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

		</form>

	</div>
</body>
</html>
