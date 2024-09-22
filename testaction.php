<?php

if (isset($_POST["submit"]) && !empty($_POST['nome']) && !empty($_POST['senha'])) {

include_once('config.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "SELECT * FROM usuarios where nome = '$nome' and senha = '$senha'";
$result = mysqli_query($conexao, $sql);


  if (mysqli_num_rows($result) < 1) {
    echo "Nome ou senha incorretos.";
  } 
  
  else {

   session_start();
   header("Location: home.php");
   exit();

  }}

