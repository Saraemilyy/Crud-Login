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
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <title>Login - NoClub</title>
 </head>
 <body>
    <div class="box">
     <form action="formulario.php" method="POST">
       <fieldset>
        <legend>
          <b>Formulário de Clientes</b>
        </legend>
        <br>
        <div class="inputBox">
             <input type="text" name="nome" id="nome" class="inputUser" required>
             <label for="nome" class="labelInput">Nome Completo</label>
        </div>
        <br><br>
        <div class="inputBox">
             <input type="text" name="email" id="email" class="inputUser" required>
             <label for="email" class="labelInput">Melhor Email</label>
        </div>
        <br><br>
        <div class="inputBox">
             <input type="tel" name="telefone" id="telefone" class="inputUser" required>
             <label for="telefone" class="labelInput">Telefone</label>
        </div>
        <br>
        <p>Sexo:</p>
           <input type="radio" id="feminino" name="genero" value="Feminino" required>
           <label for="feminino">Feminino</label>
           <input type="radio" id="masculino"  name="genero" value="Masculino" required>
           <label for="masculino">Masculino</label>
           <input type="radio" id="outros"  name="genero" value="ninformar" required>
           <label for="outros">Não Informar</label>
           <br><br>
       <div class="inputBox">
           <label for="datansc"><b>Data Nascimento:</b></label>
           <input type="date" name="datansc" id="datansc" class="inputUser" required>
       </div>
       <br><br>
       <div class="inputBox">
           <input type="text" name="cidade" id="cidade" class="inputUser" required>
           <label for="cidade" class="labelInput">Cidade</label>
       </div>
       <br><br>
       <div class="inputBox">
        <input type="text" name="estado" id="estado" class="inputUser" required>
        <label for="estado" class="labelInput">Estado</label>
       </div>
       <br><br>
       <div class="inputBox">
        <input type="text" name="endereco" id="endereco" class="inputUser" required>
        <label for="endereco" class="labelInput">Endereço</label>
       </div>
       <br>
       <input type="submit" name="submit" value="Enviar" id="submit">
       </fieldset>
     </form>
    </div>
 </body>
</html>