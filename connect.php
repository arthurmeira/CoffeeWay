<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coffeeway";

    function connect(){
        global $servername, $username, $password, $database;
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn){
            die(('Connection failed: ') . mysqli_connect_error());
        }

        echo 'Connected successfully.';
        mysqli_close($conn);
    }
    return connect();

?>