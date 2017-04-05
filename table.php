<?php

 if ($_POST['logout']) 
 {
 	if ($_COOKIE['userCookie']) 
 	{
 		setcookie("userCookie", $row['id'], time()-300);

 		header("Location: http://176.32.230.49/clxxv.com/Test/index.php");
 	}

 	else
 	{	
 		header("Location: http://176.32.230.49/clxxv.com/Test/index.php");
 	}
 }
	


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

      #topContainer
      {
       
       background: url("img/logo.jpg") no-repeat;

       background-size: cover;

       width: 100%;

      }

      #regForm
      {
        margin-top: 200px;
      }

      .center
      {
        text-align: center;
        margin-top: 200px;
      }

     #alert
     {
      margin-top: 150px;
     }

    </style>

  </head>
  <body>
    
  <h1 class="center">Welcome to 3D Diagnostix</h1>

  <div class="cotainer">
 	
 	<div class="row">
 		
 		<div class="col-md-6-offset-3">
 			
 			<form class="form-group" method="POST">
 				
 				<input type="submit" name="logout" Value = "Logout" class="btn btn-success center-block" /> 

 			</form>

 		</div>

 	</div>

  </div>

  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>