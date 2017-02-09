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

$sql = mysqli_query($conexao, "SELECT * FROM tabelafuncionario f,funcao fn, setor s WHERE f.cpf = '$cpf' 
	AND f.id_funcao = fn.id_funcao	AND f.id_setor = s.id_setor 
  ");


//$sql = mysqli_query($conexao,"SELECT * FROM tabelafuncionario f, funcao fn, empresa e WHERE f.id_setor = '$setor' 
  //AND f.id_funcao = fn.id_funcao AND f.id_emp = e.id_emp") or die("usuario n encontrado");
$rows = mysqli_num_rows($sql);
 ?>


<html lang="pt-br">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<style type="text/css">

		input[type=text]{
			white-space: nowrap; 
		    width: 300px; 
		    border: 1px solid #000000;
		    overflow: hidden;
		    text-overflow: clip; 
		    border-radius: 5px;
		    margin-left: 100px;
		}
		input[type=date]{
			width: 200px;
			margin-left: 100px;
			border-radius: 5px;
		}
		{

		}
		textarea{
			width: 500px;
			height: 200px;
		}

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
		
	</style>

	
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
 	<img src="imagens/logouespi.png">
        <br><br>
 </head>
 <body>

  <ul>

        <li><a class="active" href="painelfuncionario.php">Página Funcionário</a></li>
        <li><a class="active" href="testecheckin.php">Bater Ponto</a></li>
        <li><a class="active" href="relatoriofuncionario.php">Relatório de Pontos</a></li>
        <li><a class="active" href="exibirEscalaFunc.php">Exibir Escala Funcionário</a></li>
        <li><a href="logout.php">Sair</a></li>
</ul>


<body>
<center> 

		<table id="t01" class='table-condensed'>
  <tr>
    <th>Funcionário</th>
    <th>Cpf</th>
    <th>Função</th>
    <th>Setor</th>
  
    
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>
         <td><?= $fetch[0] ?></td>
        <td><?= $fetch[1] ?></td>
        <td><?= $fetch[18] ?></td>
        <td><?= $fetch[22] ?></td>

          <input type='hidden' name='cpf' value='<?= $fetch[3] ?>'>
      <?php }?> 

    

</table>

        <form method="post" action="salvajustificativa.php">
          	<input type ="desable" name = "data" readonly="true"  required="" value='<?= $_POST['data'] ?>'><br>
			<input type ="text" name = "causa" placeholder="causa" required=""><br>
			<textarea type ="text" name = "descricao" placeholder="descrição" ></textarea><br>
		
			<input class="btn-primary" type='submit' value='Salva Justificativa'>
          
        </form></td>

        </tr>

		

		</fieldset>

   

   
<s></s>
   </center>
</body>
</html>