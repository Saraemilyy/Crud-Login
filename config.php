<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-sara';


$conexao = new mysqli(hostname: $dbHost,username: $dbUsername,password: $dbPassword,database: $dbName);

/*if($conexao -> connect_error)
{ echo "Erro";}
else { echo "Conexão efetuada com sucesso"; }
*/
?>