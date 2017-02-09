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
 			width: 150px;
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
		
		td[id='sim']{
		  background-color: red;
		  color: white;
		  border-radius: 3px;
		}
		td[id='nao']{
		  background-color: green;
		  color: white;
		  border-radius: 3px;
		}
		input[id='btJust'] {
			background-color: #333;
			width: 150px;
			border-radius: 3px;
			color: white;

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
    <th>Falta</th>
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>
    		<td><?= $fetch[0] ?></td>
    		<td><?= $fetch[1] ?></td>
    		<td><?= $fetch[2] ?></td>
    		<td><?= $fetch[4] ?></td>

    		<?php  if ($fetch[5]){ ?>
	          <td id='sim'><?php echo "Sim"; ?></td>
	           <td><form method="post" action="justificativa.php">
					<input type='hidden' value='<?= $fetch[2] ?>' name='data'>
					<input id='btJust' type="submit" value='Justificar'>
				</form></td> 
	          <?php } else{?>
	          <td id ='nao'><?php echo "Não"; ?>  </td>
	         <?php } ?>

       		

  		  </tr>

  <?php }?>		
    

</table>
</center>
 </body>
 </html>