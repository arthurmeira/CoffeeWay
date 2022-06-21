<?php

    //Declarando o banco com suas respectivas variáveis de acesso
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coffeeway";


    //Conexão ao com mysqli
    $conn = new mysqli($servername, $username, $password, $database);
    return $conn;

    //Retornar erro de conexão
    if (!$conn) {
        die('Not connected: ' . mysqli_connect_error());
    }

?>