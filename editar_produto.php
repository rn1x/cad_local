<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Local</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style type="text/css">
		
		#tamanhoContainer {
			width: 500px;
		}
	</style>

</head>
<body>

<div>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<h4>Cadastro de Locais</h4>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
			<?php

			$sql = "SELECT * FROM `locais` WHERE id_local = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array = mysqli_fetch_array($buscar)){

				$id_local 			= $array['id_local'];
	    		$desc_local 		= $array['desc_local'];
	    		$endereco 			= $array['endereco'];
	    		$cidade 			= $array['cidade'];
	    		$estado 			= $array['estado'];
	    		$qtd_mesas 			= $array['qtd_mesas'];
	    		$qtd_cadeiras 		= $array['qtd_cadeiras'];
	    		$custo 				= $array['custo'];
			?>
		  	<div class="form-group">
			    <label>Descrição do local</label>
			    <input type="text" class="form-control" name="desc_local" value="<?php echo $desc_local ?>">
			    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  		</div>
	  		<div class="form-group">
			    <label>Endereço</label>
			    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
	  		</div>
	  		<div class="form-group">
			    <label>Cidade</label>
			    <input type="text" class="form-control" name="cidade" value="<?php echo $cidade ?>">
	  		</div>
	  		<div class="form-group">
			    <label>Estado</label>
			    <input type="text" class="form-control" name="estado" value="<?php echo $estado ?>">
	  		</div>
	  		<div class="form-group">
			    <label>Quantidade de Mesas</label>
			    <input type="number" class="form-control" name="qtd_mesas" value="<?php echo $qtd_mesas ?>">
	  		</div>
	  		<div class="form-group">
			    <label>Quantidade de Cadeiras</label>
			    <input type="number" class="form-control" name="qtd_cadeiras" value="<?php echo $qtd_cadeiras ?>">
	  		</div>
	  		<div class="form-group">
			    <label>Custo</label>
			    <input type="text" class="form-control" name="custo" value="<?php echo $custo ?>">
	  		</div>

			<button style="font-weight: bold;" type="submit" class="btn btn-success btn-sm float-right">Atualizar</button>
			<?php } ?>
	  	</form>
  	</div>
</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>