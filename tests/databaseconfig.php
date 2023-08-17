<?php
    $con = mysqli_connect("localhost","root","r6eAbana@wasak1","gigyetu");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>