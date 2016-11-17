<html>
<head>
	<title>Cadastrando...</title>
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

$sql = mysqli_query($conexao,"INSERT INTO gerentegeral(nome,cpf,rg,senha,email,matricula,telefone)
VALUES('$nome' , '$cpf' , '$rg' , '$senha' , '$email' , '$matricula' , '$telefone')");

header("Location: loginGGeral.php");
 		exit;
?>
</body>
</html>
