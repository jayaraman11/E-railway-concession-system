
<?php include("header.php");?>
<body>
	
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="Homepage.php">E-Railway Concession System</a>

			<form method="get" action="logout.php">
			 <button type="submit" class="btn btn-primary" name="logout" action="logout.php" method="get" style="margin-left: 920px;">Logout!</button>
			</form>
</nav>
    <div class="container">
    	
		<form method="post" action="concession.php">
			<h1>Concession Form</h1>
				<div class="form-group">
				<label for="name">Student Name: </label>
				<input type="text" class="form-control" name="studentname">
			</div>
			<div class="form-group">
				<label for="rollno">Student PRN:</label>
				<input type="text" class="form-control" name="rollno" required>
			</div>

			<div class="form-group">
			    <label for="address">Student Address:</label>
			    <textarea class="form-control" name="address" rows="3" required></textarea>
  			</div>
			
			<div class="form-group">
				<label for="phoneno.">Student Phone No.:</label>
				<input type="tel" class="form-control" name="phoneno" required>
			</div>

			<div class="form-group">
				<label for="division">Student Division:</label>
				<input type="text" class="form-control" name="division" required>
			</div>

			<div class="form-group">
				<label for="branch">Student Branch</label>
					<select class="form-control" id="branch" name="branch" required>
						<option active>None</option>
						<option>Computer Engineering</option>
						<option>Information Technology</option>
						<option>Electronics and Telecommunications Engineering</option>
						<option>Printing and Packaging Technology</option>
						<option>Mechanical Engineering</option>
						<option>Biotechnology Engineering</option>
					</select>
			</div>

			<div class="form-group">
				<label for="example-date-input">Date of Birth</label>
						
						<input class="form-control" type="date" name="dob" id="example-date-input">
						
			</div>

			<div class="form-group">
				<label for="source">Student Source:</label>
				<input type="text" class="form-control" name="source" required>
			</div>

			<div class="form-group">
				<label for="via">Student via:</label>
				<input type="text" class="form-control" name="via" required>
			</div>


			<div class="form-group">
				<label for="destination">Student Destination:</label>
				<input type="text" class="form-control" name="destination" required>
				</div>
			<div class="form-group">
				<label for="pclass">Student Pass Class</label>
					<select class="form-control" id="pclass" name="pclass" required>
						<option active>None</option>
						<option>1</option>
						<option>2</option>
					</select>
			</div>
			
				<div class="form-group">
				<label for="duration">Select Pass Duration</label>
					<select class="form-control" id="duration" name="duration" required>
						<option active>None</option>
						<option>Monthly</option>
						<option>Quarterly</option>
					</select>
			</div>
			

			<div class="form-group">
				<label for="route" class="control-label">Select Route</label>
					<select class="form-control" id="pclass" name="route" required>
						<option active>None</option>
						<option>Central Railway</option>
						<option>Western Railway</option>
						<option>Harbour Railway</option>
						<option>Trans-Harbour Railway</option>
					</select>
			</div>

			<div class="form-group">
				<label for="email">Student Email ID:</label>
				<input type="email" class="form-control" name="email" required>
			</div>
			</div>
			 <button type="submit" class="btn btn-primary" name="submit" action="print.php" style="margin-left: 575px;">Apply For Concession</button>
    </div>
<?php include("footer.php");?>