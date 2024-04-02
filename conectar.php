<?php
$dbHost = 'localhost';
$dbUsername = '?';
$dbPassword = '?';
$dbName = 'teste-bruno';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_errno) {
//     echo 'Erro';
// } else {
//     echo 'Conexão efetuada com sucesso!';
// }

?>