<?php
include_once("../../config/config.php");
include_once("../classes/User.php");
include_once("../classes/Notifications.php");

$limit = 7;//number of messages to load

$Notification = new \Notificationone\Notification($con, $_REQUEST['userLoggedIn']);
echo $Notification ->getNotifications($_REQUEST, $limit);
?>