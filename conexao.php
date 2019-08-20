<?php
$servername = "localhost"; //padrão - server local
$database = "teste"; //alterar conforme o nome do seu banco de dados
$username = "root"; //padrão - root
$password = ""; //senha de conexão do banco de dados.

//Criando a conexão
$conexao = mysqli_connect($servername, $username, $password, $database);
?>