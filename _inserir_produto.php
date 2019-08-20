<?php

include 'conexao.php';

$desclocal 		= $_POST['desclocal']; // Recebe o valor do atributo
$endereco		= $_POST['endereco'];
$cidade			= $_POST['cidade'];
$estado 		= $_POST['estado'];
$qtd_mesas 		= $_POST['qtd_mesas'];
$qtd_cadeiras 	= $_POST['qtd_cadeiras'];
$custo 			= $_POST['custo'];

$sql = "INSERT INTO `locais` (`desc_local`, `endereco`, `cidade`, `estado`, `qtd_mesas`, `qtd_cadeiras`,`custo`) VALUES ('$desclocal','$endereco','$cidade','$estado',$qtd_mesas,$qtd_cadeiras,'$custo')";
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container text-center" style="width: 500px; margin-top: 20px;">
	<h4 style="margin-bottom: 40px;">Local adicionado com sucesso!</h4>
	<a href="adicionar_produto.php" role="button" class="btn btn-primary">Cadastrar novo local</a>
</div>