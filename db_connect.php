<?php 
$servername = "128.199.97.155";
$username = "netApp";
$password = "123456";
$database = "recommendfit";

// Create connection
        $conn = new mysqli($servername, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");
        // Check connection
        if (mysqli_connect_errno($conn))
          {
             echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
			 exit();
          }
       
?>