<?php
include_once('config.php');

if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "SELECT * FROM usuarios where nome = '$nome' and senha = '$senha'";
$result = mysqli_query($conexao, $sql);


  if (mysqli_num_rows($result) < 1) {
    echo "Nome ou senha incorretos.";
  } 
  
  else {
        $_SESSION['nome'] = $nome;  // Armazena o nome na sessão
        $_SESSION['logado'] = true; // Marca como logado
        // Debug: verifique se está chegando aqui
        header("Location: index.php");
        exit();

  }}


  

?>