<?php

include 'conexao.php';

$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$desc_local 	= $_POST['desc_local'];
$endereco 		= $_POST['endereco'];
$cidade 		= $_POST['cidade'];
$estado 		= $_POST['estado'];
$qtd_mesas 		= $_POST['qtd_mesas'];
$qtd_cadeiras 	= $_POST['qtd_cadeiras'];
$custo 		= $_POST['custo'];

echo $sql = "UPDATE `locais` SET `desc_local`='$desc_local',`endereco`='$endereco',`cidade`='$cidade',`estado`='$estado',qtd_mesas='$qtd_mesas',qtd_cadeiras='$qtd_cadeiras',`custo`='$custo' WHERE id_local = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px; margin-top: 50px;">
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="listar_produtos.php" class=" btn btn-sm btn-warning">Voltar</a>
		</div>
	</center>
</div>