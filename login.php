<?php
        session_start();
        include("connection.php");
        $result = "";
        $row = "";
        $prn = $_POST['prn'];
        $password = $_POST['password'];
   	$sql = "SELECT `password` FROM `registration` WHERE prn = '".mysqli_real_escape_string($link, $prn)."';";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['password'] == $password) {
                    
                         $_SESSION["id"] = $row['id'];
                    	header("Location: applyconcession.php");
                        
                    }
                    else
                    {
                    	echo "error";
                    }

  

?>