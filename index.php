<?php

// Verifica se o usuário está logado (sem armazenar senha na sessão)
session_start();

// Verifica se o usuário NÃO está logado
if (empty($_SESSION['logado'])) {
    header('Location: singup.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon"/>
  <title>Home - NoClub</title>
 </head>
 
<body>
<div class="box">
  <a href="visualizer.php">Visualizar Cadastros Existentes</a><br><br><br>
  <a href="singin.php">Novo Cadastro</a><br><br><br>
  <a href="singup.php">Deslogar</a>
</div>

 <div id="rodape">
      <strong>&copy; Sara Castro 2025 - Web Developer</strong>
    </div>
</body>
</html>