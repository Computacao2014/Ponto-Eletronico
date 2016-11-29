<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>


<?php 

include ("../classes/BancoDados.php");

$gerenteGeral = new gerenteGeral();
$bd = new BancoDados();
$conexao = $bd->getConexao();

$gerenteGeral->setNome = $_POST['nome'];
$gerenteGeral->setCpf = $_POST['cpf'];
$gerenteGeral->setRg = $_POST['rg'];
$gerenteGeral->setEmail = $_POST['email'];
$gerenteGeral->setSenha = $_POST['senha'];
$gerenteGeral->setTelefone = $_POST['telefone'];
$gerenteGeral->setMatricula = $_POST['matricula'];




$gerenteGeral->deleteGerenteGeral();

$sql = mysqli_query($conexao,"INSERT INTO gerentegeral(nome,cpf,rg,senha,email,matricula,telefone)
VALUES('$nome' , '$cpf' , '$rg' , '$senha' , '$email' , '$matricula' , '$telefone')");

header("Location: ../gerente-geral/loginGGeral.php");
 		exit;
?>
</body>
</html>
