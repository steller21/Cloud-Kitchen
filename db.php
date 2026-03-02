<?php
    $conn = mysqli_connect("localhost", "root", "", "cloud_kitchen");
    if(!$conn){
        die("connection failed: " .mysqli_connect_error());
    }
?>