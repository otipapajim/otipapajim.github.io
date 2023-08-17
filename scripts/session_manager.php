<?php
    session_start();
    if(!isset($_SESSION["authclient_name"])) {
        header("Location: index.php");
        #set a variable to be echoed instead or something
        exit();
    }
?>