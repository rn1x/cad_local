<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		.main {
			-webkit-box-shadow: 10px 10px 50px -8px rgba(194,194,194,1);
			-moz-box-shadow: 10px 10px 50px -8px rgba(194,194,194,1);
			box-shadow: 10px 10px 50px -8px rgba(194,194,194,1);
		}
	</style>

</head>
<body>

<div class="container main" style="margin-top: 100px; width: 400px; border: 2px solid #f3f3f3;">
	<div style="padding:10px;">
	<center>
		<img src="images/cadeado.png" width="120px" height="120px">
	</center>
		<form action="index1.php" method="post">
			<div class="form-group">
				<labell>Usuário</labell>
				<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
			</div>
			<div class="form-group">
				<labell>Senha</labell>
				<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
			</div>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success">Login</button>
		</div>
		</form>
	</div>
</div>

<div style="margin-top: 5px;">
	<center>
		<small>Se você não possui cadastro clique <a href="cadastro_usuario.php">aqui.</a></small>
	</center>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>