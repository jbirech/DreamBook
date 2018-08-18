<?php  
require 'config/config.php';

if (isset($_SESSION['username']))
{
    $userLoggedIn= $_SESSION['username'];
}
else
{
    header("Location: register.php");
}
?>

<html>
<head>
    <title>Dreambook</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>