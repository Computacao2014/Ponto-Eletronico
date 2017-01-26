<?php 
session_start();
 	if (!isset($_SESSION["cpf"]) || !isset($_SESSION["senha"])) {
 		header("Location: loginFuncionario.php");
 		exit;
 	}else
 	{
 		
 	}

$cpf = $_SESSION['cpf'];

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 


$sql = mysqli_query($conexao, "SELECT * FROM tabelaponto WHERE id_funcionario = '$cpf' ");

 ?>
 <html>
 <head>
 	<title>
 	</title>
 	<style type="text/css">
 		th{
 			background-color: #333;
 			color: white;
 			width: 200px;
 			border-radius: 2px;
 		}
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
 	<img src="imagens/logouespi.png">
        <br><br>
 </head>
 <body>

  <ul>

        <li><a class="active" href="painelfuncionario.php">Página Funcionário</a></li>
        <li><a class="active" href="testecheckin.php">Bater Ponto</a></li>
        <li><a class="active" href="#">Relatório de Pontos</a></li>
        <li><a class="active" href="exibirEscalaFunc.php">Exibir Escala Funcionário</a></li>
        <li><a href="logout.php">Sair</a></li>
</ul>
	<center>
  <table id="t01" class='table-condensed'>
  <tr>
    <th>Ponto Entrada</th>
    <th>Ponto Saída</th> 
    <th>Data</th>
    <th>Jornada Cumprida</th>
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>
    		<td><?= $fetch[0] ?></td>
    		<td><?= $fetch[1] ?></td>
    		<td><?= $fetch[2] ?></td>
    		<td><?= $fetch[4] ?></td>
       

  		  </tr>

  <?php }?>		
    

</table>
</center>
 </body>
 </html>