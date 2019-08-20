<?php
include 'conexao.php';
include 'script/password.php';


$nomeusuario 	= $_POST['nomeusuario'];
$razaosocial	= $_POST['razaosocial'];
$cnpj			= $_POST['cnpj'];
$mail			= $_POST['mailusuario'];
$senha 			= $_POST['senhausuario'];
$nivel			= $_POST['nivelusuario'];
$status			= 'Ativo';

echo $sql = "INSERT INTO usuarios (nome_usuario,razao_social, cnpj, mail_usuario,senha_usuario,nivel_usuario,status) values ('$nomeusuario','$razaosocial','$cnpj','$mail',sha1('$senha'),$nivel,'$status')";

$inserir = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px; margin-top: 50px;">
	<center>
		<h3>Usuário adicionado com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="cadastro_usuario.php" class=" btn btn-sm btn-warning">Voltar</a>
		</div>
	</center>
</div>