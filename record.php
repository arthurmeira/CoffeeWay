<?php

//Chamando todos os arquivos necessários 
//include_once("connect.php");
//include_once("update.php");
//include_once("read.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CoffeeWay</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>CoffeeWay</h1>
            <hr>
            <br>
        </div><!--logo-->
    </header>

    <section>
        <div class="container">
            <div class="user_form">
                <fieldset style="width: 180px; padding: 20px;">  
                    <form method="post" action="create.php">
                        <label for="name">* Nome</label>
                        <input type="text" name="nome_usuario" id="name" required> <br>

                        <label for="last_name">* Sobrenome</label>
                        <input type="text" name="sobrenome_usuario" id="last_name" required> <br>
                        
                        <label for="email">* E-mail</label>
                        <input type="email" name="email_usuario" id="email" required> <br>

                        <label for="password">* Senha</label>
                        <input type="password"  name="senha_usuario" id="password" required> <br>

                        <label for="check_password">* Confirmar senha</label>
                        <input type="password" name="check_p" id="check_password" required> <br>

                        <label for="cpf">* CPF</label>
                        <input type="text"  name="cpf_usuario" id="cpf" required> <br>

                        <label for="rg">* RG</label>
                        <input type="tel"  name="rg_usuario" id="rg" required> <br>

                        <label for="cel">* Celular</label>
                        <input type="text"  name="cel_usuario" id="cel" required> <br>

                        <label for="uf">* UF</label>
                        <select  name="uf_usuario" id="uf" required>
                            <option value="">Selecione</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select> <br>

                        <label for="city">* Cidade</label>
                        <input type="text"  name="cidade_usuario" id="city" required> <br>

                        <label for="district">* Bairro</label>
                        <input type="text"  name="bairro_usuario" id="district" required> <br>

                        <label for="address">* Endereço</label>
                        <input type="text"  name="endereco_usuario" id="address" required> <br>
                        
                        <label for="birth_date">* Data de nascimento</label>
                        <input type="date"  name="dtNasc_usuario" id="birth_date" required> <br>

                        <label for="date_record">* Data de cadastro</label>
                        <input type="date"  name="dtCad_usuario" id="date_record" required> <br>

                        <input type="submit" name="sbmt" value="Cadastrar" link="create.php">

                    </form>
                </fieldset>
            </div><!--user_form-->
        </div><!--container-->
    </section>

    <script src="script.js"></script>
</body>
</html>