<?php
include_once("includes/header.php");
include_once("includes/classes/User.php");
include_once("includes/classes/post.php");
include_once("includes/classes/Message.php");


if (isset($_POST['post']))
{
	//Upload image to users page, or newsfeed
	$uploadOk = 1;
	$imageName = $_FILES['fileToUpload']['name'];
	$errorMessage = "";

	if($imageName != "")
	{
		$targetDir = "assets/images/posts/";
		$imageName = $targetDir . uniqid() . basename($imageName);// append image to a unique name so as to not overide other images that have the same name 
		$imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);

		//check file size
		if($_FILES['fileToUpload']['size'] > 10000000)
		{
			$errorMessage = "Sorry file too big can't be uploaded ";
			$uploadOk = 0;
		}

		if(strtolower($imageFileType) != "jpeg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpg")
		{
			$errorMessage = "Sorry, Image type not recognized only upload jpeg, png or jpg ";
			$uploadOk = 0;
		}

		if($uploadOk)
		{
			if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $imageName))
			{
				//Image uploaded okay
			}
			else
			{
				//image upload failure
				$uploadOk = 0;
			}
		}
	}

	if($uploadOk)
	{
		$post = new Post($con, $userLoggedIn);
		$post->submitPost($_POST['post_text'], 'none', $imageName);
	}
	else
	{
		echo "<div style='text-align:center;' class='alert alert-danger'> $errorMessage </div>";
	}


	$post = new Post($con, $userLoggedIn);
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
		<form class="post_form" action="index.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload">
			<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
			<input type="submit" name="post" id="post_button" value="Post">
			<hr>
		</form>

		
		
		<!-- $post = new Post($con, $userLoggedIn);
		$post->loadPostsFriends(); -->
		

		<!-- //a gif to show while loading the next image -->
		<div class="posts_area"></div>
		<img id="loading" src="assets/images/icons/loading.gif">
	

</div>

<div class="user_details_column">

	<h4>Top Trends</h4>
	
	<div class="trends">
		<?php
		$query = mysqli_query($con, "SELECT * FROM trends ORDER BY hits DESC LIMIT 9");

		foreach($query as $row)
		{
			$word = $row['title'];
			$word_dot = strlen($word) >= 14 ? "..." : "";

			$trimmed_word = str_split($word, 14);
			$trimmed_word = $trimmed_word[0];

			echo "<div style'padding: 1px'>";
			echo $trimmed_word . $word_dot;
			echo "<br></div>";
		}
		?>

	</div>

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
