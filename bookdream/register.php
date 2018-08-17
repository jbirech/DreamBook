<!DOCTYPE html>
<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "dream-book");//connection variable

if(mysqli_connect_errno())
{
   echo "failed to connect: ". mysqli_connect_errno();
}

$fname = "";//first name
$lname = "";//last name
$em = "";//email
$em2 = "";//confirm email
$password = "";//password
$password2 = "";//confirm password
$date = "";//signup date
$error_array = array();//holds any error

if (isset($_POST['register_button']))
{
    //registration form values
    //First name
    $fname = strip_tags($_POST['reg_fname']);//remove html tags
    $fname = str_replace(' ', '', '$fname');//remove spaces
    $fname = ucfirst(strtolower($fname)); //upper case first name
    $_SESSION['reg_fname'] = $fname;//stores the variable first name into session fname.

    //Last name
    $lname = strip_tags($_POST['reg_lname']);//remove html tags
    $lname = str_replace(' ', '', '$lname');//remove spaces
    $lname = ucfirst(strtolower($lname)); //upper case first name
    $_SESSION['reg_lname'] = $fname;

    //email
    $em = strip_tags($_POST['reg_email']);//remove html tags
    $em = str_replace(' ', '', '$em');//remove spaces
    $em = ucfirst(strtolower($em)); //upper case first name
    $_SESSION['reg_email'] = $em;


    //email2
    $em2 = strip_tags($_POST['reg_email2']);//remove html tags
    $em2 = str_replace(' ', '', '$em2');//remove spaces
    $em2 = ucfirst(strtolower($em2)); //upper case first name
    $_SESSION['reg_email2'] = $em2;

    //password
    $password = strip_tags($_POST['reg_password']);//remove html tags
    $password2 = strip_tags($_POST['reg_password2']);//remove html tags
    //$password = str_replace(' ', '', '$fname');//remove spaces
    //$password = ucfirst(strtolower($fname)); //upper case first name

    $date = date("y-m-d");//current date

    //check if email is in valid format
    if ($em == $em2)
    {
        if (filter_var($em, FILTER_VALIDATE_EMAIL)){
            $em = filter_var($em, FILTER_VALIDATE_EMAIL);

            //check if email already exists
            $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$em'");

            //count the number of rows returned
            $num_rows = mysqli_num_rows($e_check);
            if ($num_rows > 0)
            {
                array_push($error_array, "Email already in use<br> ");
            }
        }
        else{
            array_push($error_array, "invalid format");
        }
    }
    else{
        array_push($error_array, "Emails dont match<br>");
    }
    if (strlen($fname)> 25 || strlen($fname) < 2){
        array_push($error_array,"Your first name must be between 2 and 25 characters<br>");
    }
    if (strlen($lname)> 25 || strlen($lname) < 2){
        array_push($error_array,"Your last name must be between 2 and 25 characters<br>");
    }

    if ($password != $password2)
    {
        array_push($error_array, "Your passwords do not match<br>");
    }
    else{
        if (preg_match('/[^A-Za-z0-9]/', $password))
        {
            array_push($error_array, "your password can only contain english numbers or characters<br>");
        }
    }
    if(strlen($password > 30) || strlen($password)< 5)
    {
        array_push($error_array, "your  password must be between 5 and 30 characters<br>");
    }
    if (empty($error_array))
    {
        $password = md5($password);//Encrypt password before sending to database
        //Generate username by concatenating the first and last name
        $username = strtolowers($fname. "_". $lname);
        $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
        
        $i = 0;
        //if username exist add number to username
        while(mysqli_num_rows($check_username_query) != 0){
            $i++; //add 1 to i
            $username = $username . "_". $i;
            $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
        }

        //profile picture assignment
        $rand = rand(1, 2);//random number between 1 and 2
        if ($rand == 1){
            $profile_pic = "";
        }
        else {
            $profile_pic = "";
        }

        $query = mysqli_query($con, "INSERT INTO users VALUES ('', '$fname', '$lname', '$username', '$em', '$password', '$date', '$profile_pic', '0', '0', 'no', ',')");
    }

}

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Dreambook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
        <form action="register.php" method="POST">
            <input type="text" name="reg_fname"placeholder="first name" required>
            <br>
            <?php if (in_array("Your first name must be between 2 and 25 characters <br>", $error_array)) echo "Your first name must be between 2 and 25 characters <br>";?>
            <input type="text" name="reg_lname"placeholder="Last name" required>
            <br>
            <?php if (in_array("Your last name must be between 2 and 25 characters <br>", $error_array)) echo "Your last name must be between 2 and 25 characters <br>";?>
            <input type="email" name="reg_email"placeholder="Email" required>
            <br>
            <input type="email" name="reg_email2"placeholder="Confirm Email" required>
            <br>
            <?php if (in_array("Email already in use <br>", $error_array)) echo "Email already in use <br>";
            else if (in_array("invalid format <br>", $error_array)) echo "invalid format <br>";?>
            <input type="password" name="reg_password"placeholder="password" required>
            <br>
            <?php if (in_array("Your passwords do not match <br>", $error_array, "Your passwords do not match")) echo "Your passwords do not match <br>";?>
            <input type="password" name="reg_password2"placeholder="Confirm password" required>
            <br>
            <?php if (in_array("your password can only contain english numbers or characters <br>", $error_array)) "your  password must be between 5 and 30 characters <br>";
            else if (in_array("your  password must be between 5 and 30 characters <br>", $error_array)) "your  password must be between 5 and 30 characters <br>";?>
            <input type="submit" name="register_button" value="Create Account">
            <br>
        

        </form>
    </center>
</body>
</html>