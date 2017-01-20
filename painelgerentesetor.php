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
 		
 	}
  ?>



<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-left: 0px;
	margin-top: 0px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
    color: white;
}
input[type=submit]{
    background-color: #333;
    color: white  ;
    border-color: #333;
    padding: 14px 16px;
    }
input:hover{
    background-color: #111;
    
}    
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    </head>

    <body>
        <br>
            <img src="imagens/logouespi.png">
        <br><br>




</head>

<ul>

  <li><a class="active" href="painelgerentesetor.php">Página Gerente Setor</a></li>
        <li><a href="cadastrofuncinario.php">Cadastrar Funcionário</a></li>
               
        <li><form method='post' action="readgsetor.php">
            <input type="hidden" name="id_setor" value="<?= $_SESSION['id_setor']?>">
            <input type="submit" Value='Listar Funcionários do Setor'>    
        </form></li>li>

        <li><a href="logout.php">Sair</a></li>
</ul>

</body>
</html>
