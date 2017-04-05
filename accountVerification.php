<?php

  include("login.php");

  include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Verification</title>

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
      }

     #alert
     {
      margin-top: 250px;
     }

     #activationForm
     {
      margin-top: 250px;
     }

    </style>

  </head>
  <body>
    
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" >

      <div class="container">
        
        <div class="navbar-header">
          
          <button class="navbar-toggle" data-toggle="collapse" data-target="#taps">
            
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>

          </button>

          <a class="navbar-brand">3D Diagnostix</a>

        </div> <!-- navbar header div-->

        <div class="collapse navbar-collapse" id="taps">
          
          <ul class="nav navbar-nav">
            
              <li class="active"> <a href="">Home</a> </li>
              <li class=""> <a href="">About Us</a> </li>
              <li class=""> <a href="">Contact Us</a> </li>

          </ul>

          <form class="navbar-form navbar-right" method="POST">

            <div class="form-group">
              
               <input class="form-control" type="email" name="loginEmail" placeholder="Email" value="<?Php echo addslashes($_POST['loginEmail']);?>" />

            </div>   

            <div class="form-group">
              
              <input class="form-control" type="password" name="loginPassword" placeholder="Password" value="<?Php echo addslashes($_POST['loginPassword']);?>" />

            </div>  

            <div class="form-group">
              
              <input type="checkbox" name="remember" /> Remeber Me
            
            </div>

            <div class="form-group">

              <input type="submit" name="login" value="Login" class="btn btn-success" />
              
            </div>  
          
          </form>

        </div> <!-- collapse div-->

      </div> <!-- Container div-->

    </div> <!-- navbar div-->

    <div class="container">
      
      <div class="row">
        
          <div class="col-md-6 col-md-offset-3">
            
              <div class="alert alert-success" id="alert">
                Congrats your account is activated...
              </div>


          </div>

      </div>

    </div>



    <script type="text/javascript">
    
      $("#topContainer").css("min-height",$(window).height());


    </script> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>