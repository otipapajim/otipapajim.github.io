<?php
    session_start();
    if(!isset($_SESSION["authclient_name"])) {
        header("Location: signin.php");
        exit();
    }
?>