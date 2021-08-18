<?php
    $servername = "localhost";
    $username = "User@123";
    $password = "thanhdeptrai1234";

    // Create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>