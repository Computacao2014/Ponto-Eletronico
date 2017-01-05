<?php 
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 
 ?>
 <?php 
 	session_start();
 	if (!isset($_SESSION["matricula"]) || !isset($_SESSION["senha"])) {
 		header("Location: loginGSetor.php");
 		exit;
 	}else
 	{
 		
 	}
  ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Gerente Setor</title>
<style>
html{
	background-color: rgb(150, 150, 255);
}

fieldset{
	background-color: rgb(150,150,255);
	width: 400px;
	border-radius: 10px

}
a:link, a:visited {
		    background-color: rgb(150,150,255);
		    color: white;
		    padding: 8px 14px;
		    text-align: center; 
		    display: inline-block;
		    width: 350px;
		    border-radius: 15px;
		    font-size: 24px;
		    -webkit-transition-duration: 0.4s; /* Safari */
    		transition-duration: 0.40s;

		}

		a:hover, a:active {
		    background-color: white;
		    color: rgb(150,150,255);
		    border: 1px solid rgb(130,130,255);
		}
img{
	width: 300px;
}
h1{
	color: white;
	border: 2px solid black;
	width: 400px;
}
</style>

<img src="imagens/logouespi.png">
<hr>
<center><h1>Painel Gerente Setor</h1></center>

</head>
<body>
	<center>
<fieldset>
<a href="<?= "cadastrofuncinario.php" ?>"><?= "Cadastrar funcionario" ?></a><br><hr>
<a href="<?= "logout.php" ?>"><?= "Sair" ?></a><hr>
<br>
<a href="<?= "testeread.php" ?>"><?= "Listar Funcionarios" ?></a>
</fieldset>
</center>
</body>
</html>