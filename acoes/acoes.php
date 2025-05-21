<?php 

session_start();
require '../config.php';


//Inserindo Novos usuários
if (isset($_POST['create_usuario'])){
 $nome = mysqli_real_escape_string ($conexao, trim($_POST['nome']));
 $email = mysqli_real_escape_string ($conexao, trim($_POST['email']));
 $data_nascimento = mysqli_real_escape_string ($conexao, trim($_POST['datadenascimento']));
 $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

 $sql = "INSERT INTO usuarios (nome,email,data_nascimento,senha) VALUES ('$nome','$email','$data_nascimento','$senha')";
 
 mysqli_query($conexao,$sql);

 if(mysqli_affected_rows($conexao) > 0){
  $_SESSION['mensagem'] = 'Usuário criado com sucesso';
  header('Location: index.php');
  exit;
 } else{
   $_SESSION['mensagem'] = 'Usuário não foi criado. Tentar novamente';
  header('Location: index.php');
  exit;
 }
}

//Deletando Usuários
if (isset($_POST['delete_usuario'])){

$usuario_id = mysqli_real_escape_string ($conexao, $_POST['delete_usuario']);

 $sql = "DELETE FROM usuarios WHERE id = $usuario_id";
 
 mysqli_query($conexao,$sql);

 if(mysqli_affected_rows($conexao) > 0){
  $_SESSION['mensagem'] = 'Usuário deletado com sucesso';
  header('Location: index.php');
  exit;
 } else{
   $_SESSION['mensagem'] = 'Usuário não foi deletado. Tentar novamente';
  header('Location: index.php');
  exit;
 }
}


//Editando os usuários
if (isset($_POST['edit_usuario'])){
 $usuario_id = mysqli_real_escape_string ($conexao, $_POST['usuario_id']);
 $nome = mysqli_real_escape_string ($conexao, trim($_POST['nome']));
 $email = mysqli_real_escape_string ($conexao, trim($_POST['email']));
 $data_nascimento = mysqli_real_escape_string ($conexao, trim($_POST['datadenascimento']));
 $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, trim($_POST['senha'])) : '';

 $sql = "UPDATE usuarios  SET nome = '$nome', email = '$email', data_nascimento = '$data_nascimento', senha = '$senha' WHERE id = '$usuario_id'";

 mysqli_query($conexao,$sql);

 if(mysqli_affected_rows($conexao) > 0){
  $_SESSION['mensagem'] = 'Usuário alterado com sucesso';
  header('Location: ../visualizer.php');
  exit;

  }  else{
   $_SESSION['mensagem'] = 'Usuário não foi atualizado. Tentar novamente';
  header('Location: ../visualizer.php');
  exit;
 
    }
  }
?>