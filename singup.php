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
     <form action="testaction.php" method="POST">
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
       <input type="submit" name="submit" value="Enviar" class="Inputsubmit">
       <a href="singin.php"><strong>Cadastre-se aqui</strong></a><br>
       <a href="passwordremember.php"><strong>Redefina sua senha</strong></a>
       </fieldset>
     </form>
    </div>
 </body>
</html>