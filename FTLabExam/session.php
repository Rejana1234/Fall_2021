<?php
    session_start();
    if(!isset($_SESSION["ID"])) {
        header("Location: employe_update.php");
        exit();
    }
?>
