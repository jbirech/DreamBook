<?php
include_once("includes/header.php");

// $query = "";

if(isset($_GET['q']))
{
    $query = $_GET['q'];
}
else
{
    $query = "";
}

if(isset($_GET['type']))
{
    $type = $_GET['type'];
}
else
{
    $type = "";
}

?>

<div class="main_column" id="main_column">
    <?php
    if($query == "")
        echo "You must enter something in the search box.";
    else
    {
        //if the query contains underscores we assume the user is searching for usernames
        if($type == "username")
            $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$query%' AND user_closed='no' LIMIT 8");
        else
        {
            $names = explode(" ", $query);

            if(count($names) == 3)
                $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name Like '$names[0]%' AND last_name LIKE '$names[2]%') AND user_closed='no'");
            else if(count($names) == 2)
                $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name Like '$names[0]%' AND last_name LIKE '$names[1]%') AND user_closed='no'");
            else
                $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name Like '$names[0]%' OR last_name LIKE '$names[0]%') AND user_closed='no'");
        }

        //Check if results were found
        if(mysqli_num_rows($usersReturnedQuery) == 0)
            echo "We can't find anyone with a " . $type . " like: ".$query;
        else
            echo mysqli_num_rows($usersReturnedQuery) . " results found: <br> <br>";

        echo "<p id='grey'> Try searching for:</p>";
        echo "<a href='search.php?q=" . $query ."&type=name'>Names</a>, <a href='search.php?q=" . $query . "&type=username'>Username</a><br><br><hr id='search_hr'>";

        while($row = mysqli_fetch_array($usersReturnedQuery))
        {
            $user_obj = new \One\User($con, $user['username']);

            $button = "";
            $mutual_friends = "";

            if($user['username'] != $row['username'])
            {
                //Generate button depending on friendship status
                if($user_obj->isFriend($row['username']))
                    $button = "<input type='submit' name='" . $row['username'] . "' class='danger' value='Unfriend'>";
                else if($user_obj->didReceiveRequest($row['username']))
                    $button = "<input type='submit' name='" . $row['username'] . "' class='warning' value='respond to request'>";
                else if($user_obj->didSendRequest($row['username']))
                    $button = "<input type='submit' class='default' value='Request Sent'>";
                else
                    $button = "<input type='submit' name='" . $row['username'] . "' class='success' value='Add friend'>";

                $mutual_friends = $user_obj->getMutualFriends($row['username']) . "Friends in common";

                //Button forms
                if(isset($_POST[$row['username']]))
                {
                    if($user_obj->isFriend($row['username']))
                    {
                        $user_obj->removeFriend($row['username']);
                        header("Location: https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    }
                    else if($user_obj->didReceiveRequest($row['username']))
                    {
                        header("Location: requests.php");
                    }
                    else
                    {
                        $user_obj->didSendRequest($row['username']);
                    }
                }


            }

            //Note for myself later  i added s at the end of class search_results
            //confusion on which  clas to apply the style when it comes to style.css
            echo "<div class='search_result'>
                    <div class='searchPageFriendButtons'>
                        <form action='' method='POST'>
                            " . $button ."
                            <br>
                        </form>
                    </div>

                    <div class='result_profile_pic'>
                        <a href='" . $row['username'] ."'><img src='". $row['profile_pic'] ."' style='height: 100px;'></a>
                    </div>

                        <a href='" .$row['username'] ."'>" .$row['first_name'] . " " . $row['last_name'] . "
                        <p id='grey'> " . $row['username'] ." </p>
                        </a>
                        <br>
                        " . $mutual_friends ."<br>
                    </div>
                    <hr id='search_hr'>";
        }//End While
    }
    ?>
</div>