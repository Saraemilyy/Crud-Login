<?php
session_start();

if(isset($_SESSION['nome']) || isset($_SESSION['senha'])) {

unset($_SESSION['nome']);
unset($_SESSION['senha']);
header('Location: singup.php');
}

else{
  ?>
  <script language="JavaScript">
  <!--
  alert("Logado com sucesso!");
  </script>
  <?php
}
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon"/>
  <title>Home - NoClub</title>
 </head>
 
<body>
<div class="box">
  <a href="">Visualizar Cadastros Existentes</a><br><br><br>
  <a href="singin.php">Novo Cadastro</a><br><br><br>
  <a href="singup.php">Deslogar</a>
</div>


 <div id="rodape">
      <strong>&copy; Sara Castro 2024 - Web Developer</strong>
    </div>
</body>

</html>