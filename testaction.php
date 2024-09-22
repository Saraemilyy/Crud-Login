<?php

if (isset($_POST["submit"]) && !empty($_POST['nome']) && !empty($_POST['senha'])) {

include_once('config.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "SELECT * FROM usuarios where nome = '$nome' and senha = '$senha'";
$result = mysqli_query($conexao, $sql);


  if (mysqli_num_rows($result) > 0) {
   header("Location: home.php");
   session_start();
   exit();
  } 
  
  else {
   echo "Nome ou senha incorretos.";
   ?>

   <script language="JavaScript">
   <!--
   alert("Nome ou Senha inválidos!");
   window.location = 'singup.php';
   </script>

   <?php
  }}
?>