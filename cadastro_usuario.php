<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container" style="width: 400px; margin-top: 40px;">
	<h4>Cadastro de Usuário</h4>
	<form action="_insert_usuario.php" method="post">
		<div class="form-group">
			<label>Nome do Usuário</label>
			<input type="text" name="nomeusuario" class="form-control" autocomplete="off" required placeholder="Nome Completo">
		</div>
		<div class="form-group">
			<label>Razão Social</label>
			<input type="text" name="razaosocial" class="form-control" autocomplete="off" required placeholder="Razão Social">
		</div>
		<div class="form-group">
			<label>CNPJ</label>
			<input type="text" name="cnpj" class="form-control" autocomplete="off" required placeholder="CNPJ">
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" name="mailusuario" class="form-control" autocomplete="off" required placeholder="Seu E-mail">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input id="txtSenha" type="password" name="senhausuario" class="form-control" autocomplete="off" required placeholder="Sua Senha">
		</div>
		<div class="form-group">
			<label>Repetir Senha</label>
			<input type="password" name="senhausuario2" class="form-control" autocomplete="off" required placeholder="Repetir Senha" oninput="validaSenha(this)">
			<small>Precisa ser igual a senha digitada acima.</small>
		</div>
		<div class="form-group">
			<label>Nível de Acesso</label>
			<select name="nivelusuario" class="form-control">
					<option value="1">Administrador</option>
					<option value="2">RH</option>
					<option value="3">Profissional</option>
			</select>
		</div>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success btn-sm float-right">Cadastrar</button>
			<a href="menu.php" style="font-weight: bold; margin-right: 10px;" role="button" class="btn btn-primary btn-sm float-right">Voltar</a>
		</div>
	</form>
	
</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
}
</script>

</body>
</html>