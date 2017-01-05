<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>
<?php 
include("Funcionario.php");
 ?>

<?php 

$funcionario = new Funcionario();
 
$funcionario->nome = $_POST['nome'];
$funcionario->cpf = $_POST['cpf'];
$funcionario->rg = $_POST['rg'];
$funcionario->email = $_POST['email'];
$funcionario->senha = $_POST['senha'];
$funcionario->telefone = $_POST['telefone'];
$funcionario->id_setor = $_POST['id_setor'];
$funcionario->id_funcao = $_POST['id_funcao'];
$funcionario->id_carga_hrs = $_POST['id_carga_hrs'];
$funcionario->segunda = $_POST['segunda'];
$funcionario->terca = $_POST['terca'];
$funcionario->quarta = $_POST['quarta'];
$funcionario->quinta = $_POST['quinta'];
$funcionario->sexta = $_POST['sexta'];
$funcionario->sabado = $_POST['sabado'];
$funcionario->domingo = $_POST['domingo'];



$funcionario->createFuncionario();

header("Location: loginGSetor.php");
 		exit;
?>



?>
</body>
</html>
