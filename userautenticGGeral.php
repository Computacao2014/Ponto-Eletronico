<?php 
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 
?>

<html>
<head>
	<title>Logando Gerente Geral...</title>

	<script type="text/javascript">
	function loginsuccessfully(){
		setTimeout("window.location='painelgerentegeral.php'",0);
	}
	function loginfail(){
		setTimeout("window.location='loginGGeral.php'",0);
	}
	</script>
</head>
<body>
	<?php 
	$matricula = $_POST['matricula'];
	$senha = $_POST['senha'];

	$sql = mysqli_query($conexao,"SELECT * FROM gerentegeral WHERE matricula = '$matricula' and senha = '$senha'") or die("usuario n encontrado");
	//$sql = "SELECT * FROM gerentegeral WHERE matricula = '$matricula' and senha = '$senha'";
	$rows = mysqli_num_rows($sql);

	if($rows > 0){
		session_start();
		$_SESSION['matricula'] = $_POST['matricula'];
		$_SESSION['senha'] = $_POST['senha'];
	
		echo "<script>loginsuccessfully()</script>";
	
	}
	else{
		echo "<center>Matricula ou Senha inválidos,espere um momento...</center>";
		echo "<script>loginfail()</script>";
	}
 	?>
</body>
</html>
