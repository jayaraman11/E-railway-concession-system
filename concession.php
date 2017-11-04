<?php 
      include ("connection.php");
      $name = $_POST['studentname'];
      $prn = $_POST['rollno'];
      $address = $_POST['address'];
      $phoneno = $_POST['phoneno'];
      $division = $_POST['division'];
      $branch = $_POST['branch'];
      $dob = $_POST['dob'];
      $duration1 = "4 years";
      $source = $_POST['source'];
      $via = $_POST['via'];
      $destination = $_POST['destination'];
      $class = $_POST['pclass'];
      $duration = $_POST['duration'];
      $route = $_POST['route'];
      $email = $_POST['email'];  	
      $printdate_print = date("Y-m-d");
      		if(isset($_POST['submit']))
          {
          $sql = "INSERT INTO `concession` (`id`, `name`, `prn`, `address`, `phoneno`, `division`,`branch`, `dob`, `source`, `via`, `destination`, `class`, `duration`, `route`, `email`) VALUES (NULL, '".mysqli_real_escape_string($link, $_POST['studentname'])."', '".mysqli_real_escape_string($link, $_POST['rollno'])."', '".mysqli_real_escape_string($link, $_POST['address'])."', '".mysqli_real_escape_string($link, $_POST['phoneno'])."', '".mysqli_real_escape_string($link, $_POST['division'])."', '".mysqli_real_escape_string($link, $_POST['branch'])."', '".mysqli_real_escape_string($link, $_POST['dob'])."', '".mysqli_real_escape_string($link, $_POST['source'])."', '".mysqli_real_escape_string($link, $_POST['via'])."', '".mysqli_real_escape_string($link, $_POST['destination'])."', '".mysqli_real_escape_string($link, $_POST['pclass'])."', '".mysqli_real_escape_string($link, $_POST['duration'])."'
          '".mysqli_real_escape_string($link, $_POST['route'])."', '".mysqli_real_escape_string($link, $_POST['email'])."');";
                mysqli_query($link, $sql);
        //Form Printing 

        echo '
        <html>
        <head>
        <meta charset="utf-8">
        </head>
        <body>
        <div style="margin-left: 54px ;margin-top: 167px; position:absolute;"><input type="text" value="' . $name . '" style="font-weight: bold; width:305px;border: 0px;" readonly></div>
        <div style="margin-left: 58px ;margin-top: 237px; position:absolute; "><textarea rows="10" cols="10" style="font-weight: bold; outline: none; border: none; resize:none;" readonly>' . $duration . '</textarea></div>
        <div style="margin-left: 157px ;margin-top: 237px; position:absolute;"><textarea rows="10" cols="10" style="font-weight: bold; outline: none; border: none; resize:none;" >' . $source . "\n\n" . $address . '</textarea></div>
        <div style="margin-left: 268px ;margin-top: 237px; position:absolute;"><textarea rows="10" cols="10" style="font-weight: bold; outline: none; border: none; resize:none;" readonly>' . $destination . '</textarea></div>
        <div style="margin-left: 565px;margin-top: 215px; position:absolute;"><input type="text" value="' . $dob . '" style="font-weight: bold; width:75px; border: 0px; font-size:10px" readonly></div>
        <div style="margin-left: 638px;margin-top: 267px; position:absolute;"><input type="text" value="' . $branch . '" style="font-weight: bold; width:200px; border: 0px;" readonly></div>
        <div style="margin-left: 662px;margin-top: 283px; position:absolute;"><input type="text" value="' . $duration1 . '" style="font-weight: bold; border: 0px;" readonly></div>
        <div style="margin-left: 385px ;margin-top: 387px; position:absolute;"><textarea rows="6" cols="10" style="font-weight: bold; outline: none; border: none; resize:none;" readonly>' . $duration. '</textarea></div>
        <div style="margin-left: 482px ;margin-top: 387px; position:absolute;"><textarea rows="6" cols="9" style="font-weight: bold; outline: none; border: none; resize:none;" readonly>' . $source . '</textarea></div>
        <div style="margin-left: 579px ;margin-top: 387px; position:absolute;"><textarea rows="6" cols="9" style="font-weight: bold; outline: none; border: none; resize:none;" readonly>' . $destination . '</textarea></div>
        <div style="margin-left: 673px ;margin-top: 387px; position:absolute;"><textarea rows="6" cols="11" style="font-weight: bold; outline: none; border: none; resize:none;" readonly>' . $printdate_print . '</textarea></div>
        <div style="margin-left: 785px ;margin-top: 387px; position:absolute;"><textarea rows="6" cols="11" style="font-weight: bold; outline: none; border: none; resize:none;" readonly>' . $class . '</textarea></div>
        </body>
        </html>

        ';

        }
 
?>