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
 		header("Location: loginGGeral.php");
 		exit;
 	}else
 	{
 		echo "<center>Voce esta logado!</center>";
 	}
  ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Menu Vertical</title>
<style type="text/css">
<!--
ul#menu {
margin-top: 200px;	
width:300px;
border:1px solid #003399;
background:#FADE8B;

padding:0;
list-style-type:none;
}
ul#menu li {
border-bottom:10px solid #A4A0F5;
}
ul#menu li a:link, ul#menu li a:visited {
display:block;
height:1%;
text-decoration:none;
font-family: Geneva, Arial, Helvetica, sans-serif;
font-size:14px;
color:#5E0F50;
border-left:10px solid #EEC591;
padding-left:5px;
}
ul#menu li a:hover {
background-color: #FFE4B5;
color:#DAA520;
border-left:10px solid #FFD39B;
}
-->
</style>
</head>
<body>
<ul id="menu">
<a href="<?= "cadastroGerenteSetor.php" ?>"><?= "Cadastrar Gerente de Setor" ?></a>
</ul>
</body>
</html>