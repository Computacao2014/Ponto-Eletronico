<?php 
$segunda = $_POST['segunda'];
$terca = $_POST['terca'];
$quarta = $_POST['quarta'];
$quinta = $_POST['quinta'];
$sexta = $_POST['sexta'];
$sabado = $_POST['sabado'];
$domingo = $_POST['domingo'];

$cpf_old = $_POST['cpf_old'];

if(isset($_POST['segunda']))
	{	
		$segunda = 1;
	
	}
	else
	{
	    $segunda = 0;
	}

	if(isset($_POST['terca']))
	{
	    $terca = 1;
	}
	else
	{
	    $terca = 0;
	}
	if(isset($_POST['quarta']))
	{
	    $quarta = 1;
	}
	else
	{
	    $quarta = 0;
	}
	if(isset($_POST['quinta']))
	{
	    $quinta = 1;
	}
	else
	{
	    $quinta = 0;
	}
	if(isset($_POST['sexta']))
	{
	    $sexta = 1;
	}
	else
	{
	    $sexta = 0;
	}
	if(isset($_POST['sabado']))
	{
	    $sabado = 1;
	}
	else
	{
	    $sabado = 0;
	}
	if(isset($_POST['domingo']))
	{
	    $domingo = 1;
	}
	else
	{
	    $domingo = 0;
	}




$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = "UPDATE tabelafuncionario SET segunda='$segunda' , terca='$terca' , quarta='$quarta' , quinta='$quinta' , sexta='$sexta' , sabado='$sabado', domingo='$domingo' WHERE cpf='$cpf_old'";
//adicionar no update
mysqli_query($conexao,$sql);




header("Location: painelgerentesetor.php");
 		exit;
 ?>
