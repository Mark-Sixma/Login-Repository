<?php

include("connection.php");

if($_GET['token'])
	{
		$userId = $_GET['id'];

		//check that the id and the token is related to each other.

		$query = "SELECT `activation` FROM `MyUsers` WHERE `id` = '$userId' ";

		$result = mysqli_query($link, $query);

		if (!$result) 
		{
		    printf("Error: %s\n", mysqli_error($link));
		    exit();
		}

		$row = mysqli_fetch_array($result);

		$activationCode = $_GET['token'];

		if($row['activation'] == $activationCode)
		{
			$query = "UPDATE `MyUsers` SET `activated` = 1 WHERE `id` = '$userId' " ;

			mysqli_query($link, $query);

			setcookie("userCookie", $row['id'], time()+60*60*24);

			header("Location: http://176.32.230.49/clxxv.com/Test/table.php");
		}

		
	} 
?>