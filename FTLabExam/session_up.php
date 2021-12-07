<?php
    session_start();
    if(!isset($_SESSION["Name"])) 
    {
        header("Location: employe_update.php");
        exit();
    }
?>
