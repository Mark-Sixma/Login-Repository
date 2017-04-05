<?php
	
	include("connection.php");

	
	if($_COOKIE['userCookie']) 
	{
		header("Location: http://176.32.230.49/clxxv.com/Test/table.php");
	}

	if($_POST["signup"])
	{
		if(!$_POST['username']) $error.= "<br /> Please Enter A Username";
		
		if(!$_POST['email']) $error.= "<br /> Please Enter An Email Address";

		if(!$_POST['phone']) $error.= "<br /> Please Enter A Phone Number" ;

		else 
		{
			if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $_POST['phone'])) $error.= "<br />  please Enter A Valid Phone Number";
		}

		if(!$_POST['password']) $error.= "<br />Please Enter A Password";

		else
		{
			if (strlen($_POST['password'])<8) $error.= "<br />  Please Enter A Password With At Least 8 Charecters";

			//if (!preg_match('`A-Z`', $_POST['password'])) $error.= "<br />  <br /> <br /> <br /> <br /> <br /> <br /> Please Include At Least A Capital Letter In Your Password" ;
		}

		if($error) $error= "There Where Error(s) In Your Sign Up Information".$error;

		else
		{
			$userEmail = mysqli_real_escape_string($link, $_POST['email']);

			$query = "SELECT * FROM `MyUsers` WHERE `email` = '$userEmail' " ;

				$result = mysqli_query($link , $query);
					
				$numRows =  mysqli_num_rows($result);

				if($numRows) $error = "Sorry This Email Address is Already Exist. Do You Want To Login ?"; // user is already exist in the database

				else
				{
					$regUsername = mysqli_real_escape_string($link , $_POST['username']);

					$regEmail = mysqli_real_escape_string($link , $_POST['email']);

					$regPhone = mysqli_real_escape_string($link , $_POST['phone']);

					$regPassword = md5(md5($_POST['email']).$_POST['password']);

					$verification = md5(md5(($_POST['email'])).$_POST['password'].time());

					$query = "INSERT INTO `MyUsers` (`username` , `email` , `phone` , `password`, `activation`) VALUES('$regUsername', '$regEmail', '$regPhone', '$regPassword', '$verification' ) ";

					mysqli_query($link, $query);
					
					$uID = mysqli_insert_id($link);

					$emailTo = $regEmail ;

					$subject = "Account Activation" ;

					$body = "Please submit your activation code in the link below to verify your account http://176.32.230.49/clxxv.com/Test/Activation.php?id=$uID&token=$verification";

					$headers = ("From: AhmedEid175@gmail.com");

					mail($emailTo, $subject, $body);
					
					$message = "Please Check Your Email Address to Activate Your Account...";

					$_SESSION['id'] = mysqli_insert_id($link);

					// redirect to database table.				
					
				} // the user is not already exist in the database.

		} // there weren't any errors in the information and you have to let him register.

	}


	if($_POST['login'])
	{	
		
		if(!$_POST['loginEmail']) $error.= "<br /> Please Enter Your Email Address";

		if(!$_POST['loginPassword']) $error.= "<br />Please Enter Your Password";

		if($error) $error= "Some Errors Here ".$error;

		else
		{	

			$logEmail= mysqli_real_escape_string($link , $_POST['loginEmail']);

			$logPassword= md5(md5($_POST['loginEmail']).$_POST['loginPassword']);
						
			$query = "SELECT * FROM `MyUsers` WHERE `email` = '$logEmail' AND `password` = '$logPassword' " ;

			$result = mysqli_query($link, $query);

			$row = mysqli_fetch_array($result);

			if(!$row['id'])
			{
				$error = "This email address is not registered please register first and login";
			}


			else 
			{
				if ($row['email'] == $logEmail && $row['password'] == $logPassword) 
				{
					if($row['activated'] == 1)
					{

						if($_POST['remember'])
							{
									setcookie("userCookie", $row['id'], time()+60*60*24);
									header("Location: http://176.32.230.49/clxxv.com/Test/table.php");
							}

							else
							{
									$_SESSION['id'] = $row['id'] ;
									header("Location: http://176.32.230.49/clxxv.com/Test/table.php");
							}
					} else{

						$error = "Please, Activate your account first!";
					}
				}else
				 	$error = "Please make sure that you entered your data correctly!";
				} 
		} // the user doesn't have any login errors

	}


	
?>