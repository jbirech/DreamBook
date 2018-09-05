<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "test");//connection variable

if(mysqli_connect_errno())
{
   echo "failed to connect: ". mysqli_connect_errno();
}

echo 'Hello world'

?>
