<?php  
require 'config/config.php';
include_once("includes/classes/User.php");
include_once("includes/classes/post.php");
include_once("includes/classes/Message.php");
include_once("includes/classes/Notification.php");


//require_once("all_includes.php");

if (isset($_SESSION['username']))
{
    $userLoggedIn= $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
}
else
{
    header("Location: register.php");
}
?>

<!-- !DOCTYPE HTML -->
<html>
<head>
    <title>Dreambook</title>

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootbox.min.js"></script>
    <script src="assets/js/Dreambook.js"></script>
    <script src="assets/js/jquery.jcrop.js"></script>
    <script src="assets/js/jcrop_bits.js"></script>
   
    <!-- Css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.Jcrop.css">

</head>
<body>

    <div class="top_bar">
        <div class="logo">
            <a href="index.php">Dreambook</a>
        </div>

        <div class="search">

            <form action="search.php" method="GET" name="search_form">
                <input type="text" onKeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="search..." autocomplete="off" id="search_text_input">

                <div class="button_holder">
                    <img src="assets/images/icons/magnifying_glass.png" >
                </div>
            </form>

            <div class="search_results">
            </div>

            <div class="search_results_footer_empty">
            </div>


        </div>

        <nav>
            <?php
            //unread messages
               $messages = new Message($con, $userLoggedIn);
               $num_messages = $messages->getUnreadNumber();

               //unread notifications
               $notifications = new \Note\Notification($con, $userLoggedIn);
               $num_notifications= $messages->getUnreadNumber();

               $user_obj = new \One\User($con, $userLoggedIn);
               $num_requests = $user_obj->getNumberOfFriendRequests();
            ?>


            <a href="<?php echo $userLoggedIn; ?>">
                <?php echo $user['first_name'];?>
            </a>

            <a href="index.php">
                <i class="fa fa-home fa-lg"></i>
            </a>
            
            <a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'message')">
                <i class="fa fa-envelope fa-lg"></i>
                <?php
                if ($num_messages > 0)
                   echo ' <span class="notifications_badge" id="unread_message">'. $num_messages . '</span>'
                ?>
            </a>
            
            <a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'notification')">
                <i class="fa fa-bell-slash fa-lg">       
                </i>
                <?php
                
                if ($num_notifications > 0)
                   echo ' <span class="notifications_badge" id="unread_message">'. $num_notifications. '</span>'
                
                ?>
            </a>

            <a href="requests.php">
                <i class="fa fa-users fa-lg">
                </i>
                <?php
                
                if ($num_requests > 0)
                   echo ' <span class="notifications_badge" id="unread_requests">'. $num_requests. '</span>'
                
                ?>
            </a>

            <a href="settings.php">
                <i class="fa fa-cog fa-lg">
                </i>
            </a>
            <a href="includes/handlers/logout.php">
                <i class="fa fa-sign-out-alt fa-lg">       
                </i>
            </a>
        </nav>

        <div class="dropdown_data_window" style="height:0px; border:none;"></div>
        <input type="hidden" id="dropdown_data_type" value="">

    </div>

    <script>
	var userLoggedIn = '<?php echo $userLoggedIn; ?>';

	$(document).ready(function()
	{

		$('.dropdown_data_window').scroll(function()
		{
			var inner_height = $('.dropdown_data_window').innerHeight();//div containing data
			var scroll_top = $('.dropdown_data_window').scrollTop();
			var page = $('.dropdown_data_window').find('.nextPageDropdownData').val();
			var noMoreData = $('.dropdown_data_window').find('.noMoreDropdownData').val();

			if ((scroll_top + inner_height >=('.dropdown_data_window')[0].scrollHeight) && noMoreData == 'false')
			{
                var pageName; //holds name of page to send ajax request to
                var type = $('.dropdown_data_type').val();

                if(type == 'notifications')
                    pageName = "ajax_load_notifications.php";
                else if(type == 'message')
                    pageName = "ajax_load_messages.php";

				var ajaxReq = $.ajax(
				{
					url: "includes/handlers/" + pageName,
					type: "POST",
					data: "page=" + page + "&userLoggedIn" + userLoggedIn,
					cache:false,

					success: function(response)
					{
						$('.dropdown_data_window').find('.nextPageDropdownData').remove(); //Removes current .nextpage
						$('.dropdown_data_window').find('.noMoreDropdownData').remove(); //Removes current .nextpage

						$('.dropdown_data_window').append(response);
					}
				});
			}//End if

			return false;

		});// End (window).scroll(function()
	});

</script>
 
    <div class="wrapper">