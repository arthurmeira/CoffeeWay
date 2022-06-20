<?php

    //Chamando todos os arquivos necessários 
    include_once("connect.php");
    include_once("update.php");
    include_once("view.php");

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
                <h2>Usuários</h3>
                <hr>
                
                <table>
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
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Arthur</td>
                        <td>Meira</td>
                        <td>arthurmeiraprog@gmail.com</td>
                        <td>48999414764</td>
                        <td>SC</td>
                        <td>Criciúma</td>
                        <td>MariaDB</td>
                        <td>Rua Santo Javascript, 440</td>
                        <td>20-02-2004</td>
                        <td>18-11-2021</td>

                        <div class="btn" >
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        </div><!--btn-->
                        
                    </tr>
                </table>

            </fieldset>
        </div><!--card-->
    </div><!--container-->

</section>



</body>
</html>