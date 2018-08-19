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

<?php
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/post.php");
//session_destroy();

if (isset($_POST['post']))
{
	$post = new post($con, $userLoggedIn);
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
	</div>
	
</div>
</body>
</html>
