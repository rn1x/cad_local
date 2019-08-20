<?php

include 'conexao.php'

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Local</title>
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
		<h4>Cadastro de Local</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
	  		<div class="form-group">
			    <label>Descrição do Local</label>
			    <input type="text" class="form-control" name="desclocal" placeholder="Descrição do Local" autocomplete="off" required>
	  		</div>
	  		<div class="form-group">
			    <label>Endereço</label>
			    <input type="text" class="form-control" name="endereco" placeholder="Endereço" autocomplete="off" required>
	  		</div>
	  		<div class="form-group">
			    <label>Cidade</label>
			    <input type="text" class="form-control" name="cidade" placeholder="Cidade" autocomplete="off" required>
	  		</div>
	  		<div class="form-group">
			    <label>Estado</label>
			    <input type="text" class="form-control" name="estado" placeholder="Estado" autocomplete="off" required>
	  		</div>
	  		<div class="form-group">
			    <label>Quantidade de Mesas</label>
			    <input type="number" class="form-control" name="qtd_mesas" placeholder="Insira quantidade de mesas" autocomplete="off" required>
	  		</div>
	  		<div class="form-group">
			    <label>Quantidade de Cadeiras</label>
			    <input type="number" class="form-control" name="qtd_cadeiras" placeholder="Insira quantidade de cadeiras" autocomplete="off" required>
	  		</div>
	  		<div class="form-group">
			    <label>Custo por hora locada</label>
			    <input type="text" class="form-control" name="custo" placeholder="Custo por hora locada" autocomplete="off" required>
	  		</div>
			
			<button style="font-weight: bold;" type="submit" class="btn btn-success btn-sm float-right">Cadastrar</button>
	  	</form>
	  	<div class="text-right">
	  		<a href="menu.php" style="font-weight: bold; margin-right: 10px;" role="button" class="btn btn-primary btn-sm float-right">Voltar</a>
	  	</div>
  	</div>
</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>