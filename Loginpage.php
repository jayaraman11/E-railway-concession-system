
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style type="text/css">
    html { 
    background: url(rail.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    body{
      background: none;
    }
    .container{
      margin-left: 475px;
      margin-top: 220px;
      text-align: center;
      width: 500px;
      background-color: none;  
    }
    .btn{
      background-color: #FF6900 ;
      border: white 5px;
      margin-right: 140px;
    }
    h1{
      margin-right: 60px;
    }
    p{
      margin-right: 63px;
    }
    a{
      color: white;
    }

    </style>
        <script>
      function validate(){
  
    var x = document.getElementById('prn').value;
    if (x == " ") {
        alert("PRN must be filled out");
        
    }

    }
    </script>

  </head>
  <body>
     <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="Homepage.php">E-Railway Concession System</a>
       <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      
    </nav>

    <div class="container">
      <h1>User Login</h1>
      <br>
        <form method="post" name="login" action="login.php" onsubmit="validate();">
          <div class="form-group row">
            <div class="col-sm-4 col-md-6 col-lg-10">
              <input type="text" class="form-control" name="prn" id="prn" placeholder="PRN" class="control-label">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" class="control-label">
            </div>
          </div>


            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="log">Log in</button>
              </div>
          </div>
        </form>
  </div>
 
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>