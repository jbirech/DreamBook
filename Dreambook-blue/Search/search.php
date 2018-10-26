<?php
if(isset($_GET["term"]))
    $term = $_GET["term"];
else
    exit("no such item specified");

if(isset($_GET["type"]))
    $type = $_GET["type"];
else
    $type = "sites";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dreambook search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/style.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <div class="Wraper">
        <div class="header">
            <div class="headerContent">
                <div class="logoContainer">
                    <a href="../register.php">
                    <!--Remeber to add a dreambook logo that when clicked takes user back to the register page -->
                        <img src="">
                    </a>
                </div>

                <div class="searchContainer">
                    <form action="search.php" method="GET">
                        <div class="searchBarContainer">
                            <input class="searchBox" type="text" name="term">
                                <button class="searchButton">
                                search
                                </button>
                        
                        </div>
                    
                    </form>
                </div>

            </div>

            <div class="tabsContainer">
                <ul class="tabList">
                    <li class ="<?php echo $type == 'sites' ? 'active' : ''?>"> 
                        <a href='<?php echo "search.php?term=$term&type=sites";?>'>
                        Sites
                        </a>
                    </li>
                    
                    <li class ="<?php echo $type == 'images' ? 'active' : ''?>"> 
                        <a href='<?php echo "search.php?term=$term&type=images";?>'>
                        Images
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</body>
</html>