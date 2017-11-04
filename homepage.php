
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
    .container-fluid{
      margin-left: 420px;
      margin-top: 65px;
      text-align: center;
      width: 500px;
      background-color: none;  
    }
    .btn{
      background-color: #FF6900 ;
      border: white 5px;
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
    .left{
      float: left;
    }
    .card{
      margin:20px;
    }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <a class="navbar-brand" href="Homepage.php">E-Railway Concession System</a>
    </nav>
    <div class="container-fluid">
        <div class="card text-center left">
          <div class="card-header"></div>
            <div class="card-block">
              <h4 class="card-title">Login</h4>
              <p class="card-text">If you have already registered then click below to login else register first.</p>
              <a href="loginpage.php" class="btn btn-primary">Login</a>
            </div>
          <div class="card-footer text-muted"></div>
        </div>
        <div class="card text-center">
          <div class="card-header"></div>
            <div class="card-block">
              <h4 class="card-title">Register</h4>
              <p class="card-text">Click below to Register.</p>
              <a href="register.php" class="btn btn-primary">Register</a>
            </div>
          <div class="card-footer text-muted"></div>
        </div>
    </div>
</body>
</html>