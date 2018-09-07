<!-- # **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    index.php                                          :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: jobirech <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/08/17 00:09:33 by jobirech          #+#    #+#              #
#    Updated: 2018/08/17 00:09:42 by jobirech         ###   ########.fr        #
#                                                                              #
# **************************************************************************** # -->
!DOCTYPE HTML

<?php
include_once("includes/header.php");
include_once("includes/classes/User.php");
include_once("includes/classes/post.php");
include_once("includes/classes/Message.php");


if (isset($_POST['post']))
{
	$post = new \Postone\Post($con, $userLoggedIn);
	$post->submitPost($_POST['post_text'], 'none');
}
?>
	<div class="user_details column">
		<a href="<?php echo $userLoggedIn; ?>"> <img src="<?php echo $user['profile_pic']; ?>"</a>

		<div class="user_details_left_right">
			<a href="<?php echo $userLoggedIn; ?>">
			<?php 
				echo $user['first_name'] . " " . $user['last_name'];
			?>
			</a>
			<br>
			<?php 
				echo "Posts: " .$user['num_posts']. "<br>";
				echo "Likes: " .$user['num_likes'];
			?>
		</div>
	</div>

	<div class="main_column column">
		<form class="post_form" action="index.php" method="POST">
			<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
			<input type="submit" name="post" id="post_button" value="Post">
			<hr>
		</form>

		
		
		<!-- $post = new \Postone\Post($con, $userLoggedIn);
		$post->loadPostsFriends(); -->
		

		<!-- //a gif to show while loading the next image -->
		<div class="posts_area"></div>
		<img id="loading" src="assets/images/icons/loading.gif">
	

</div>

<script>
	var userLoggedIn = '<?php echo $userLoggedIn; ?>';

	$(document).ready(function()
	{
		$('#loading').show();

		//original ajax request for loading first posts
		$.ajax({
			url: "includes/handlers/ajax_load_posts.php",
			type: "POST",
			data: "page=1&userLoggedIn=" + userLoggedIn,
			cache:false,

			success: function(data)
			{
				$('#loading').hide();
				$('.posts_area').html(data);
			}
		});

		$(window).scroll(function()
		{
			//scrolling to load the posts from the other pages/ old posts
			var height = $('.post_area').height();//div containing photos
			var scroll_top = $(this).scrollTop();
			var page = $('.post_area').find('.nextPage').val();
			var noMorePosts = $('.posts_area').find('.noMorePosts').val();

			if ((document.body.scrollHeight == document.body.scrollTop + window.innerHeight) && noMorePosts == 'false')
			{
				$('#loading').show();
				//alert("Hello");

				var ajaxReq = $.ajax(
				{
					url: "includes/handlers/ajax_load_posts.php",
					type: "POST",
					data: "page=" + page + "&userLoggedIn" + userLoggedIn,
					cache:false,

					success: function(response)
					{
						$('.posts_area').find('.nextPage').remove(); //Removes current .nextpage
						$('.posts_area').find('.noMorePosts').remove(); //Removes current .nextpage

						$('#loading').hide();
						$('.posts_area').append(response);
					}
				});
			}//End if

			return false;

		});// End (window).scroll(function()
	});

</script>

</div>
</body>
</html>
