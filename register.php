<?php include("header.php");?>

<body>
	
    
     <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" style="width: 100%">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="Homepage.html">E-Railway Concession System</a>
      
      
    </nav>   
  </ul>
    </nav>
    <div class="container" method="post" action="r.php">
    	
		<form method="post" action="r.php" name="reg">
			<h1>Registration Form</h1>
				<div class="form-group">
				<label for="name" class="control-label">Student Full Name: </label>
				<input type="text" class="form-control" name="studentname" required>
			</div>
			<div class="form-group">
				<label for="rollno" class="control-label">Student PRN:</label>
				<input type="text" class="form-control" name="rollno" required>
			</div>

			<div class="form-group">
				<label for="password" class="control-label">Enter Password:</label>
				<input type="password" class="form-control" name="password"  id="password" required>
			</div>
			
			<div class="form-group">
				<label for="division" class="control-label">Student Division:</label>
				<input type="text" class="form-control" name="division" required>
			</div>
			<div class="form-group">
			    <label for="address" class="control-label">Student Address:</label>
			    <textarea class="form-control" name="address" rows="3" required></textarea>
  			</div>

			<div class="form-group">
				<label for="phoneno." class="control-label">Student Phone No.:</label>
				<input type="tel" class="form-control" name="phoneno"  id="phoneno" required>
			</div>

			<div class="form-group">
				<label for="source" class="control-label">Student Source:</label>
				<input type="text" class="form-control" name="source" required>
			</div>

			<div class="form-group">
				<label for="source" class="control-label">Student via:</label>
				<input type="text" class="form-control" name="via" required>
			</div>


			<div class="form-group">
				<label for="via" class="control-label">Student Destination:</label>
				<input type="text" class="form-control" name="destination" required>
				</div>
			
			<div class="form-group ">
				<label for="example-date-input" class="control-label">Date of Birth</label>
						
						<input class="form-control" type="date" value="2011-08-19" name="dob" id="example-date-input" required>
						
			</div>
      		<div class="form-group">
				<label for="via" class="control-label">Student Email ID:</label>
				<input type="email" class="form-control" name="email" required>
			</div>
			</div>
			 <button type="submit" class="btn btn-primary control-label" name="submit" style="margin-left: 575px;" onclick="validate();">Submit</button>
		</form>
    </div>
   
<?php include("footer.php");?>