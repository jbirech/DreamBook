<?php
require '../../config/config.php';

    if(isset($_GET['post_id']))
        $post_id = $_GET['post_id'];

    if(isset(['result']))
    {
        if($_POST['result'] == 'true')
            $query = mysqli_query($con, "UPDATE posts SET deleted='yes' WHERE id='$post_id'");
    }

?>