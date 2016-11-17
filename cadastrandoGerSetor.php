<html>
<head>
	<title>Cadastrando Gerente de Setor...</title>
</head>
<body>
<?php 
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 
 ?>

<?php 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$matricula = $_POST['matricula'];
$idSetor = $_POST['idSetor'];


$sql = mysqli_query($conexao,"INSERT INTO gerentesetor(nome,cpf,rg,senha,email,matricula,telefone, idSetor)
VALUES('$nome' , '$cpf' , '$rg' , '$senha' , '$email' , '$matricula' , '$telefone', '$idSetor')");

//header("Location: login.php");
 		exit;
?>
</body>
</html>
