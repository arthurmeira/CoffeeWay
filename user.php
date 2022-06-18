<?php

    include_once('connect.php');

    $name_user = $_POST['nome_usuario'];
    $lastname_user = $_POST['sobrenome_usuario'];
    $email_user = $_POST['email_usuario'];
    $password_user = $_POST['senha_usuario'];
    $cpf_user = $_POST['cpf_usuario'];
    $rg_user = $_POST['rg_usuario'];
    $cel_user = $_POST['cel_usuario'];
    $uf_user = $_POST['uf_usuario'];
    $city_user = $_POST['cidade_usuario'];
    $district_user = $_POST['bairro_usuario'];
    $address_user = $_POST['endereco_usuario'];
    $birth_date_user = $_POST['dtNasc_usuario']; 

    $sql = "INSERT INTO 
            usuarios(
                nome_usuario,
                sobrenome_usuario, 
                cpf_usuario, 
                rg_usuario, 
                email_usuario, 
                celular_usuario, 
                uf_usuario, 
                cidade_usuario, 
                bairro_usuario, 
                endereco_usuario, 
                dtNasc_usuario, 
                senha_usuario
            ) 

            VALUES
            (
                '$name_user', 
                '$lastname_user', 
                '$cpf_user', '$rg_user', 
                '$email_user', 
                '$cel_user', 
                '$uf_user', 
                '$city_user', 
                '$district_user', 
                '$address_user',
                '$birth_date_user',
                '$password_user'
            )";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>