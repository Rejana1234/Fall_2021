<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mysql";
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
