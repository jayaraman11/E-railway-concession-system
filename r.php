<?php

	   session_start();
	   include ("connection.php"); 
        if(isset($_POST['submit'])){

        	$sql = "INSERT INTO `registration` (`id`, `name`, `prn`, `password`, `division`, `address`, `phoneno`, `source`, `source via`, `destination`, `dob`, `emailid`) VALUES (NULL, '".mysqli_real_escape_string($link, $_POST['studentname'])."', '".mysqli_real_escape_string($link, $_POST['rollno'])."','".mysqli_real_escape_string($link, $_POST['password'])."', '".mysqli_real_escape_string($link, $_POST['division'])."', '".mysqli_real_escape_string($link, $_POST['address'])."', '".mysqli_real_escape_string($link, $_POST['phoneno'])."', '".mysqli_real_escape_string($link, $_POST['source'])."', '".mysqli_real_escape_string($link, $_POST['via'])."', '".mysqli_real_escape_string($link, $_POST['destination'])."', '".mysqli_real_escape_string($link, $_POST['dob'])."',
          '".mysqli_real_escape_string($link, $_POST['email'])."');";
          mysqli_query($link, $sql);
          header("Location:loginpage.php");


        }
?>