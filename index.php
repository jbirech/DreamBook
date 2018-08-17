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
$con = mysqli_connect("localhost", "root", "", "dream-book"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($con, "INSERT INTO test VALUES ('2', 'Optimus Prime')");

?>

<html>
<head>
	<title>Welcome to Swirlfeed</title>
</head>
<body>
	Hello Reece!!!!!
</body>
</html>
