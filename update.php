<?php

    $id = $_POST['id_usuario'];

    include_once('connect.php');
    include_once('user.php');    

    $sql = "UPDATE usuarios SET 
        'nome_usuario' = '.$name_user.', 
        'sobrenome_usuario' = '.$lastname_user.',
        'email_usuario' = '.$email_user.'
        'celular_usuario' = '.$cel_user.', 
        'cpf_usuario' = '.$cpf_user.',
        'rg_usuario' = '.$rg_user.'
        'cidade_usuario' = '.$city_user.', 
        'uf_usuario' = '.$uf_user.',
        'endereco_usuario' = '.$district_user.',
        'bairro_usuario' = '.$address_user.',
        'dtNasc_usuario' = '.$birth_date_user.'
    WHERE id_usuario = ".$id;


?>