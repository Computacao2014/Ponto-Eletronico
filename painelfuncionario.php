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
 	if (!isset($_SESSION["cpf"]) || !isset($_SESSION["senha"])) {
 		header("Location: loginFuncionario.php");
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

        <li><a class="active" href="painelfuncionario.php">Página Funcionário</a></li>

        <li><form method='post' action="testecheckin.php">
            <input type="hidden" name="cpf" value="<?= $_SESSION['cpf']?>">
            <input type="submit" Value='Bater Ponto'>    
        </form></li>
         <li><form method='post' action="relatoriofuncionario.php">
            <input type="hidden" name="cpf" value="<?= $_SESSION['cpf']?>">
            <input type="submit" Value='Relatório'>    
        </form></li>
        <li><form method='post' action="exibirEscalaFunc.php">
            <input type="hidden" name="cpf" value="<?= $_SESSION['cpf']?>">
            <input type="submit" Value='Exibir Escala Funcionário'>    
        </form></li>
        <li><a href="logout.php">Sair</a></li>
</ul>

</body>
</html>
