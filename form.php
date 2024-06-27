<?php

if(isset($_POST['submit']))
{
  //  print_r($_POST['nome']);
  //  print_r('<br>');
  //  print_r($_POST['email']);
  //  print_r('<br>');
  //  print_r($_POST['telefone']); 
  //  print_r('<br>');
  //  print_r($_POST['data']);
  
   include_once('config.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $data = $_POST['data'];
   $senha = $_POST['senha'];

$resulte = mysqli_query($conexao, "INSERT INTO usuarios(nome, telefone, email, data, senha) VALUES ('$nome', '$telefone', '$email', '$data', '$senha')");


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="for.css"> 
</head>
<body>
    <div>
        <form class="container" action="form.php" method="post">
            <h1>Nova conta</h1>

            <div class="field">
                <label for="nome">Seu Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
                <br> <br>
            </div>

            <div class="field">
                <label for="email">Seu E-Mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
                <br> <br>
            </div> 

            <div class="field">
                <label for="telefone">Seu Telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
                <br> <br>
            </div>
            
            <div class="fielde">
                <label for="nascimento">Sua data de nascimento</label>
                <input type="date" id="data" name="data" placeholder="Digite sua data de nascimento*" required>
                <br> <br>
            </div>

            <div class="fielde">
                <label for="senha">Crie sua senha</label>
                <input type="senha" id="senha" name="senha" placeholder="Digite sua senha*" required>
                 <br> <br>
            </div>

            <input class="submit" type="submit"  name="submit" value="Enviar">
        </form>

    </div>
</body>
</html>