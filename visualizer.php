<?php
session_start();
include_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Cadastros Existentes</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-4">
     <div class="row">
      <div class="col-md-12">
       <div class="card">
        <div class="card-header">
         <h4>Lista de Usuários
          <a href = 'usuario-create.php' class = "btn btn-primary float-end">Adicionar Usuários</a>
         </h4>
        </div>
        <div class="card-body">
         <table class="table table-bordered table-striped">
          <thead>
           <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data Nascimento</th>
            <th>Ações</th>
           </tr>
          </thead>
          <tbody>
            <?php 
            $sql = 'SELECT * FROM usuarios';
            $usuarios = mysqli_query($conexao,$sql);
            if (mysqli_num_rows($usuarios) > 0){
              foreach($usuarios as $usuarios){
            ?>
          <tr>
           <td><?=$usuarios['id']?></td>
           <td><?=$usuarios['nome']?></td>
           <td><?=$usuarios['email']?></td>
           <td><?=date('d/m/Y',strtotime($usuarios['data_nascimento']))?></td>
            <td>
             <a href="acoes\view-user.php?id=<?=$usuarios['id']?>" class="btn btn-secondary btn-sm">Visualizar</a>
             <a href="acoes\edit-user.php?id=<?=$usuarios['id']?>" class="btn btn-success btn-sm">Editar</a>
             <form action ="acoes.php" method="POST" class="d-inline">
               <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_usuario" value="<?=$usuarios['id']?>" class="btn btn-danger btn-sm">Excluir</button>
             </form>   
            </td>
            </tr>
          <?php
              }
            } else{
              echo '<h5>Nenhum usuário encontrado</h5>';
            }
              ?>
          </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>