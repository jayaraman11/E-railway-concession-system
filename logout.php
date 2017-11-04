<?php
	if (isset($_GET['logout'])) {
	include ("connection.php");
	session_start();
	session_destroy();
	 mysqli_close($link);
	header("Location: homepage.php");
	}
	else {
		echo "<h1>Error! during logout</h1>";
	}
?>