
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Learning AJAX </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

      #fields
      {
        margin-top: 100px;
      }

      .center
      {
        text-align: center;
      }

      #margin
      {
        margin-bottom: 80px;
      }

      .colored
      {
        color: #0269C2;
      }
    </style>

  </head>
  <body>

      <div class="container" id="fields">

        <div class="row">

          <div class="col-md-6 col-md-offset-3">
            

            <h1 class="center colored" id="margin">Uppercase Converter </h1>
    

            <div class="form-group">
        
                <label for="input">Hit your sentences:</label>

                <input type="text" name="input" id="input" class="form-control" onkeyup="updateText()" /> <br /> <br /> <br /> <br />

                <label for="output">Output:</label>

                <input type="text" name="output" id="output" class="form-control" readonly />

          </div>
          
          
        </div>


        </div>

      </div>

      <script type = "text/JavaScript">

   /* function updateText()
    {
      var inputWords = document.getElementById("input").value;

      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() 
      {
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
          document.getElementById("output").value = xhttp.responseText;
        }
      };
        xhttp.open("POST", "server.php?input="+inputWords, true);
        xhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        xhttp.send();
    }
    */
      
    /*
      function updateText()
      {
          var userInputs = $("#input").val();
             
         $.get("server.php","input="+userInputs, function(response, status, http)
          {
            $("#output").val(response);
          } 

          ,"text"); 
      }
      */


    function updateText()
    {
       var userData = $("#input").val(); 
     
       $.ajax
      ({

        url: "server.php",

        type: "GET",

        data: "inputs="+userData,
        
        dataType: "text",
        
      /*  beforeSend: function(http)
        {
          alert("You will send a request to the server");
        },
      */
        success: function(response, status, http)
        {
          $("#output").val(response);
        },

        error: function(error, status, http)
        {
          alert("Some errors here:"+error);
        }

      });
    }  
     
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>