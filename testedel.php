<?php 
include("GerenteGeral.php");

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = "DELETE FROM gerentegeral WHERE matricula=12345";

mysqli_query($conexao, $sql);
 
echo "string";

 ?>
