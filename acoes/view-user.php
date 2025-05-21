<?php
session_start();
include_once ('../config.php');
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
     <div class="row">
      <div class="col-md-12">
       <div class="card">
        <div class="card-header">
         <h4>Visualizar Usuários
          <a href="../visualizer.php" class = "btn btn-danger float-end">Voltar</a>
         </h4>
        </div>
        <div class="card-body">
         <?php 
         if (isset($_GET['id'])) {
          $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
          $sql = "SELECT * FROM usuarios WHERE id = '$usuario_id'";
          $query = mysqli_query($conexao,$sql);

          if (mysqli_num_rows($query) > 0) {
           $usuarios = mysqli_fetch_array($query);
          
           ?>
          <div class="md-3">
           <label>Nome</label>
           <p class="form-control">
           <?=$usuarios['nome'];?>
           </p>
          </div>
           <div class="md-3">
           <label>Email</label>
           <p class="form-control">
           <?=$usuarios['email'];?>
           </p>
          </div>
           <div class="md-3">
           <label>Data de Nascimento</label>
           <p class="form-control">  
           <?=$usuarios['data_nascimento'];?>  
           </p>
          </div>   
              
       <?php }else {
         echo "<h5>Usuário não encontrado</h5>";
        }};
        ?>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>