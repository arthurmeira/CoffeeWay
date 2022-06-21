<?php

        //Chamando o arquivo 'connect.php'
        include_once('connect.php');

        //Declarando variáveis para cada 'id' do form de cadastro
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
        $date_record = $_POST['dtCad_usuario']; 

        //Variável $sql responsável por inserir os dados do cadastro no banco
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
                    dtCad_usuario,  
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
                    '$date_record',
                    '$password_user'
                )";

        //Chek para ver se o registro do $sql funcionou ou não
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully <br>";
            echo $sql;
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - CoffeeWay</title>
</head>
<body>
    
        <a href="/Projeto/CoffeeWay/view.php">Ver registros</a>

</body>
</html>