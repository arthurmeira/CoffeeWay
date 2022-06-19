<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coffeeway";

    global $servername, $username, $password, $database;
    $conn = new mysqli($servername, $username, $password, $database);

    if (!$conn) {
        die('Not connected: ' . mysqli_connect_error());
    }else{
        echo 'Connected <br>';
    }

?>