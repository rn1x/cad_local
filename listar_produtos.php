<!DOCTYPE html>
<html>
<head>
	<title>Lista de Locais</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/94127e9545.js"></script>
</head>
<body>
<?php

session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

include 'conexao.php';

$sql 		= "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar 	= mysqli_query($conexao,$sql);
$array 		= mysqli_fetch_array($buscar);
$nivel 		= $array['nivel_usuario'];


?>

<div class="container" style="margin-top: 40px;">
	<h3>lista de Locais</h3>

	<table class="table">
		<thead>
		    <tr>
		      <th scope="col">Descrição do local</th>
		      <th scope="col">Endereço</th>
		      <th scope="col">Cidade</th>
		      <th scope="col">Estado</th>
		      <th scope="col">Qtd Mesas</th>
		      <th scope="col">Qtd Cadeiras</th>
		      <th scope="col">Custo p/ hora</th>
		      <th scope="col"> Ação </th>
		    </tr>
		</thead>
		<?php
		    	include'conexao.php';
		    	$sql = "SELECT * FROM `locais`";
		    	$busca = mysqli_query($conexao,$sql);

		    	while ($array = mysqli_fetch_array($busca)){

		    		$id_local 		= $array['id_local'];
		    		$desc_local 		= $array['desc_local'];
		    		$endereco	 		= $array['endereco'];
		    		$cidade 			= $array['cidade'];
		    		$estado 			= $array['estado'];
		    		$qtd_mesas 			= $array['qtd_mesas'];
		    		$qtd_cadeiras 		= $array['qtd_cadeiras'];
		    		$custo 				= $array['custo'];
		    ?>
		    <tr>
				<td><?php echo $desc_local ?></td>
				<td><?php echo $endereco ?></td>
				<td><?php echo $cidade ?></td>
				<td><?php echo $estado ?></td>
				<td><?php echo $qtd_mesas ?></td>
				<td><?php echo $qtd_cadeiras ?></td>
				<td><?php echo $custo ?></td>
				<td>

					<?php 
					if(($nivel == 1)||($nivel == 2)) {
					?>
		      		<a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_local ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
		      		
		      		<?php }

		      		if ($nivel == 1) {
		      		?>
		      		<a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_local ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
		      		<?php } ?>

		  		</td>
		    </tr>
		<?php } ?>
	</table>
	<div class="text-right">
		<a href="menu.php" style="font-weight: bold; margin-right: 10px;" role="button" class="btn btn-primary btn-sm float-right">Voltar</a>
	</div>

</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>