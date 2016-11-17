<html>
<head>
	<title>Cadastrando Funcionario...</title>
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
$idSetor = $_POST['idSetor'];
$funcao = $_POST['funcao'];
$hrsemanais = $_POST['hrsemanais'];
$escala = $_POST['escala'];

$sql = mysqli_query($conexao,"INSERT INTO tabelafuncionario(nome,cpf,rg,senha,email, telefone, idSetor, funcao, hrsemanais, escala)
VALUES('$nome' , '$cpf' , '$rg' , '$senha' , '$email' , '$telefone', '$idSetor', '$funcao', '$hrsemanais','$escala')");

header("Location: painelgerentesetor.php");
 		exit;
?>
</body>
</html>
