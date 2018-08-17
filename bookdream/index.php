<!DOCTYPE html>
 <?php
// $con = mysqli_connect("localhost", "root", "", "dream-book");//connection variable

// if(mysqli_connect_errno())
// {
//    echo "failed to connect: ". mysqli_connect_errno();
// }

// $fname = "";//first name
// $lname = "";//last name
// $em = "";//email
// $em2 = "";//confirm email
// $password = "";//password
// $password2 = "";//confirm password
// $date = "";//signup date
// $error_array = array();//holds any error

// if (isset($_POST['register_button']))
// {
//     //registration form values
//     //First name
//     $fname = strip_tags($_POST['reg_fname']);//remove html tags
//     $fname = str_replace(' ', '', '$fname');//remove spaces
//     $fname = ucfirst(strtolower($fname)); //upper case first name

//     //Last name
//     $lname = strip_tags($_POST['reg_lname']);//remove html tags
//     $lname = str_replace(' ', '', '$lname');//remove spaces
//     $lname = ucfirst(strtolower($lname)); //upper case first name

//     //email
//     $em = strip_tags($_POST['reg_email']);//remove html tags
//     $em = str_replace(' ', '', '$em');//remove spaces
//     $em = ucfirst(strtolower($em)); //upper case first name

//     //email2
//     $em2 = strip_tags($_POST['reg_email2']);//remove html tags
//     $em2 = str_replace(' ', '', '$em2');//remove spaces
//     $em2 = ucfirst(strtolower($em2)); //upper case first name

//     //password
//     $password = strip_tags($_POST['reg_password']);//remove html tags
//     $password2 = strip_tags($_POST['reg_password2']);//remove html tags
//     //$password = str_replace(' ', '', '$fname');//remove spaces
//     //$password = ucfirst(strtolower($fname)); //upper case first name

//     $date = date("y-m-d");//current date

//     //check if email is in valid format
//     if ($em == $em2)
//     {
//         if (filter_var($em, FILTER_VALIDATE_EMAIL)){
//             $em = filter_var($em, FILTER_VALIDATE_EMAIL);

//             //check if email already exists
//             $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$em'");

//             //count the number of rows returned
//             $num_rows = mysqli_num_rows($e_check);
//             if ($num_rows > 0)
//             {
//                 array_push($error_array, "Email already in use<br> ");
//             }
//         }
//         else{
//             array_push($error_array, "invalid format");
//         }
//     }
//     else{
//         array_push($error_array, "Emails dont match");
//     }
//     if (strlen($fname)> 25 || strlen($fname) < 2){
//         array_push($error_array,"Your first name must be between 2 and 25 characters");
//     }
//     if (strlen($lname)> 25 || strlen($lname) < 2){
//         array_push($error_array,"Your last name must be between 2 and 25 characters");
//     }

//     if ($password != $password2)
//     {
//         array_push($error_array, "Your passwords do not match");
//     }
//     else{
//         if (preg_match('/[^A-Za-z0-9]/', $password))
//         {
//             array_push($error_array, "your password can only contain english numbers or characters");
//         }
//     }
//     if(strlen($password > 30) || strlen($password)< 5)
//     {
//         array_push($error_array, "your  password must be between 5 and 30 characters");
//     }

// }

?> 
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dreambook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    Hello Joe.
</body>
</html>