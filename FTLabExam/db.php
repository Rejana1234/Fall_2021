<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mysql";
    $con = mysqli_connect($dbemployee);
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
