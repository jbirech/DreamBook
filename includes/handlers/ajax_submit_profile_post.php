<?php
require '../../config/config.php';
include_once("../classes/User.php");
include_once("../classes/post.php");
include_once("includes/classes/Notification.php");

if(isset($_POST['post_body']))
{
    $post = new \Postone\Post($con, $_POST['user_from']);
    $post->submitPost($_POST['post_body'], $_POST['user_to']);
}

?>