<?php 
class Post
{
    private $user_obj;
    private $con;

    public function __construct($con, $user)
    {
        $this->con = $con;
        //$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$user'");
        $this->user_obj = new User($con, $user); //mysqli_fetch_array($user_details_query);
    }

    public function submitpost($body, $user_to)
    {
        $body = strip_tags($body);//removes html tags
        $body = mysqli_real_escape_string($this->con, $body);
        $check_empty = preg_replace('/\s+/', '', $body); //deletes all space

        if ($check_empty != "")
        {
            //current date and time
            $date_added = date("Y-m-d H:i:s");
            //get username
            $added_by = $this->user_obj->getUsername();

            //if user is  on own profile, user_to is 'none'
            if ($user_to == $added_by)
            {
                $user_to = "none";
            }
            //insert post
            $query = mysqli_query($this->con, "INSERT INTO posts VALUES ('', '$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0')");
            $returned_id = mysqli_insert_id($this->con);

            //insert notification

            //update post count for user
            $num_posts = $this->user_obj->getNumPosts();
            $num_posts++;
            $update_query = mysqli_query($this->con, "UPDATE users SET num_posts='$num_posts' WHERE username='$added_by'");
        }
    }
}

?>