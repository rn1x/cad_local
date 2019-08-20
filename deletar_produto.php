<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `locais` WHERE id_local = $id";
$deletar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px; margin-top: 50px;">
	<center>
		<h3>Deletado com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="listar_produtos.php" class=" btn btn-sm btn-warning">Voltar</a>
		</div>
	</center>
</div>