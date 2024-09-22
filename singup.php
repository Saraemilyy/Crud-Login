<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Obtém os dados do formulário
     $nome = $_POST['nome'];
     $telefone = $_POST['telefone'];
     $email = $_POST['email'];
     $genero = $_POST['genero'];
     $data_nsc = $_POST['datansc'];
     $cidade = $_POST['cidade'];
     $estado = $_POST['estado'];
     $endereco = $_POST['endereco'];
 
     // Escapa os dados para evitar SQL injection
     $nome = mysqli_real_escape_string($conexao, $nome);
     $telefone = mysqli_real_escape_string($conexao, $telefone);
     $email = mysqli_real_escape_string($conexao, $email);
     $genero = mysqli_real_escape_string($conexao, $genero);
     $data_nsc = mysqli_real_escape_string($conexao, $data_nsc);
     $cidade = mysqli_real_escape_string($conexao, $cidade);
     $estado = mysqli_real_escape_string($conexao, $estado);
     $endereco = mysqli_real_escape_string($conexao, $endereco);
 
     // Executa a consulta
     $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, telefone, email, sexo ,data_nasc, cidade, estado, endereco) 
     VALUES ('$nome', '$telefone', '$email', '$genero', '$data_nsc', '$cidade', '$estado', '$endereco')");
 
}
 ?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon"/>
  <title>Login - NoClub</title>
 </head>
 <body>
    <div class="box">
     <form action="singin.php" method="POST">
       <fieldset>
        <legend>
          <b>Login</b>
        </legend>
        <br>
        <div class="inputBox">
             <input type="text" name="nome" id="nome" class="inputUser" required>
             <label for="nome" class="labelInput">Nome Completo</label>
        </div>
        <br><br>
        <div class="inputBox">
             <input type="email" name="email" id="email" class="inputUser" required>
             <label for="email" class="labelInput">Melhor Email</label>
       <input type="submit" name="submit" value="Enviar" id="submit">
       <a href="singup.php">Não possui uma conta? Clique aqui para se Cadastrar</a>
       </fieldset>
     </form>
    </div>
 </body>
</html>