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
ul label[id='1']{
    color: white;
    padding-left: 400px;
    padding-top: 15px;
    text-decoration: underline;
}
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    </head>

    <body>
        
            <img src="imagens/logouespi.png">
        <br><br>




</head>

<ul>

        

        <li><a class="active" href="painelfuncionario.php">Página Funcionário</a></li>
        <li><a class="active" href="testecheckin.php">Bater Ponto</a></li>
        <li><a class="active" href="relatoriofuncionario.php">Relatório de Pontos</a></li>
        <li><a class="active" href="exibirEscalaFunc.php">Exibir Escala Funcionário</a></li>
        <li><a href="logout.php">Sair</a></li>
        
        <label id='1'><?php  echo "Seja Bem Vindo, ".$_SESSION['nome']; ?></label>
</ul>
    
</body>
</html>
