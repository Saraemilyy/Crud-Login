<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     // Obtém os dados do formulário
     $nome = $_POST['nome'];
     $password= $_POST['senha'];
 
     // Escapa os dados para evitar SQL injection
     $nome = mysqli_real_escape_string($conexao, $nome);
     $password = mysqli_real_escape_string($conexao, $password);
 
     // Executa a consulta
     $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, senha,telefone, email, sexo ,data_nasc,estado) 
     VALUES ('$nome','$password', '$telefone', '$email', '$genero', '$data_nsc', '$estado')");
 
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
     <form action="singin.php" method="GET">
       <fieldset>
        <legend>
          <b>Login</b>
        </legend>
        <br>
        <div class="inputBox">
             <input type="text" name="nome" id="nome" class="inputUser" required>
             <label for="nome" class="labelInput">Nome</label>
        </div>
        <br><br>
        <div class="inputBox">
             <input type="password" name="senha" id="senha" class="inputUser" required>
             <label for="senha" class="labelInput">Senha</label>
       <input type="submit" name="submit" value="Enviar" id="submit">
       <a href="singin.php">Não possui uma conta? Clique aqui para se Cadastrar</a>
       <a href="passwordremember.php">Esqueceu sua senha? <strong>Redefina</strong></a>
       </fieldset>
     </form>
    </div>
 </body>
</html>