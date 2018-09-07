<?php
include_once("../../config/config.php");
include_once("../../includes/classes/User.php");

$query = $_POST['query'];
$userLoggedIn = $_POST['userLoggedIn'];

$names = explode(" ", $query);

//If query contains an underscore, assume user is searching for usernames
if(strpos($query, '_') !== false)
{
    $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$query%' AND user_closed='no' LIMIT 8");
}
// if there are 2 words assume they are the first & last name
else if(count($names) == 2)
{
    $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name Like '$names[0]%' AND last_name LIKE '$names[1]%') AND user_closed='no' LIMIT 8");
}
//if there is only one word search either the first or the last name
else
{
    $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name Like '$names[0]%' OR last_name LIKE '$names[0]%') AND user_closed='no' LIMIT 8");
}

if($query != "")
{
    while($row = mysqli_fetch_array($usersReturnedQuery))
    {
        $user = new \One\User($con, $userLoggedIn);

        if($row['username'] != $userLoggedIn)
            $mutual_friends = $user->getMutualFriends($row['username']) . " friends in common";
        else
            $mutual_friends = "";

        echo "<div class='resultDisplay'>
                <a href='" . $row['username'] . "' style='color: #1485BD'>
                    <div class='liveSearchProfilePic'>
                        <img src='" . $row['profile_pic'] . "'>
                    </div>

                    <div class='liveSearchtext'>
                        ". $row['first_name'] . " ". $row['last_name'] . "
                        <p>" . $row['username'] . "</p>
                        <p id='grey'>" . $mutual_friends . "</p>
                    </div>
        
                </div>";
    }
}

?>
