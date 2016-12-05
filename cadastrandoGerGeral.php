<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>
<?php 
include("GerenteGeral.php");
 ?>

<?php 

$gerenteGeral = new GerenteGeral();

$gerenteGeral->nome = $_POST['nome'];
$gerenteGeral->cpf = $_POST['cpf'];
$gerenteGeral->rg = $_POST['rg'];
$gerenteGeral->email = $_POST['email'];
$gerenteGeral->senha = $_POST['senha'];
$gerenteGeral->telefone = $_POST['telefone'];
$gerenteGeral->matricula = $_POST['matricula'];

$gerenteGeral->updateGerente();

header("Location: loginGGeral.php");
 		exit;
?>
</body>
</html>
