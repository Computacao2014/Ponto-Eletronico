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

if(isset($_POST['segunda']))
	{	
		$funcionario->segunda = 1;
	
	}
	else
	{
	    $funcionario->segunda = 0;
	}

	if(isset($_POST['terca']))
	{
	    $funcionario->terca = 1;
	}
	else
	{
	    $funcionario->terca = 0;
	}
	if(isset($_POST['quarta']))
	{
	    $funcionario->quarta = 1;
	}
	else
	{
	    $funcionario->quarta = 0;
	}
	if(isset($_POST['quinta']))
	{
	    $funcionario->quinta = 1;
	}
	else
	{
	    $funcionario->quinta = 0;
	}
	if(isset($_POST['sexta']))
	{
	    $funcionario->sexta = 1;
	}
	else
	{
	    $funcionario->sexta = 0;
	}
	if(isset($_POST['sabado']))
	{
	    $funcionario->sabado = 1;
	}
	else
	{
	    $funcionario->sabado = 0;
	}
	if(isset($_POST['domingo']))
	{
	    $funcionario->domingo = 1;
	}
	else
	{
	    $funcionario->domingo = 0;
	}



$funcionario->createFuncionario();

header("Location: loginGSetor.php");
 		exit;
?>



?>
</body>
</html>
