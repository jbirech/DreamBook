<?php
include_once("../../config/config.php");
include_once("../classes/User.php");
include_once("../classes/Message.php");

$limit = 7;//number of messages to load

$message = new Message($con, $_REQUEST['userLoggedIn']);
echo $message->getConvosDropdown($_REQUEST, $limit);
?>