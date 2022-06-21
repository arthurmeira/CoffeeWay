<?php

    //Chamando todos os arquivos necessários 
    include_once("connect.php");
    $results = mysqli_query($conn, "SELECT * FROM usuarios");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read - CoffeeWay</title>
</head>
<body>
    

<header>
    <div class="logo">
        <h1>CoffeeWay</h1>
       
    </div><!--logo-->
</header>

<section>

    <div class="container">
        <div class="card">
            <fieldset>
                <div class="top">
                    <h2>Usuários</h3>
                    <a href="/Projeto/CoffeeWay/record.php">New</a>
                </div>
                <hr>
                 
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>E-mail</th>
                            <th>Celular</th>
                            <th>UF</th>
                            <th>Cidade</th>
                            <th>Bairro</th>
                            <th>Endereço</th>
                            <th>Data aniversário</th>
                            <th>Data cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                        <tr>
                            <td><?php echo $row['id_usuario']; ?></td>
                            <td><?php echo $row['nome_usuario']; ?></td>
                            <td><?php echo $row['sobrenome_usuario']; ?></td>
                            <td><?php echo $row['email_usuario']; ?></td>
                            <td><?php echo $row['celular_usuario']; ?></td>
                            <td><?php echo $row['uf_usuario']; ?></td>
                            <td><?php echo $row['cidade_usuario']; ?></td>
                            <td><?php echo $row['bairro_usuario']; ?></td>
                            <td><?php echo $row['endereco_usuario']; ?></td>
                            <td><?php echo $row['dtNasc_usuario']; ?></td>
                            <td><?php echo $row['dtCad_usuario']; ?></td>
        
                            <div class="btn" >
                                <td><a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a></td>
                                <td><a href="delete.php?delete=<?php echo $row['id']; ?>" class="edit_btn" >Delete</a></td>
                            </div><!--btn-->
                        </tr>
                    <?php } ?>
                    

                </table>
            </fieldset>
        </div><!--card-->
    </div><!--container-->

</section>



</body>
</html>