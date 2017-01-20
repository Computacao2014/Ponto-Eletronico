<?php 
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$matricula_old = $_POST['matricula_old'];


$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = "UPDATE gerentesetor SET nome='$nome' , matricula='$matricula' ,cpf='$cpf' , rg='$rg' , senha='$senha' , email='$email' , telefone='$telefone' WHERE matricula='$matricula_old'";
//adicionar no update
mysqli_query($conexao,$sql);




header("Location: painelgerentegeral.php");
 		exit;
 ?>
