<?php 


$cpf = $_POST['cpf'];

function readGerente($busca){
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM tabelafuncionario WHERE cpf = $busca") or die("usuario n encontrado");
 return mysqli_fetch_row($sql);
}

 $result = readGerente($cpf);

 ?>
 <html>
 <head>
 	<title>Funcionário</title>
 	<style type="text/css">
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
		input[type=submit]:hover{
		    background-color: #111;
		    
		}

		fieldset input[type=text]{
			border-radius: 5px;
			width: 400px;
			margin-right: 200px;
		}   
 	</style>
 	


 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	    </head>

	    <body>
	        <br>
	            <img src="imagens/logouespi.png">
	        <br><br>

</head>

 <body>
 	<ul>

	  <li><a class="active" href="painelgerentesetor.php">Página Gerente Setor</a></li>
	        <li><a href="cadastrofuncinario.php">Cadastrar Funcionário</a></li>
	               
	        <li><a href="#">Listar Funcionários do setor</a></li>

	        <li><a href="logout.php">Sair</a></li>
	</ul>
 	
 	<fieldset class='form-inline'>
 	<center>
	 <form method='post' action='updateEscala.php'>
	 <center>
	 
	 		
	 	
	 	 <table>

	 	 	<tr>
		      <td>Nome: </td>
		      <td><?=$result[0]?></td>		  
		    </tr>

<br>
		    <tr>
		      <td>Cpf: </td>
		      <td><?=$result[1]?></td>		  
		    </tr>

		  <tr>
		    <td>Dia da Semana</td>
		    <td>Ativo</td>		  
		  </tr>

		  <tr>
		    <td>Segunda-feira</td>
		    <td><input type="checkbox" name="segunda" value=$result[8]></td>	  
		  </tr>

		   <tr>
		    <td>Terça-feira</td>
		    <td><input type="checkbox" name="terca" value=$result[9]></td>	  
		  </tr>

		  <tr>
		    <td>Quarta-feira</td>
		    <td><input type="checkbox" name="quarta" value=$result[10]></td>	  
		  </tr>

		  <tr>
		    <td>Quinta-feira</td>
		    <td><input type="checkbox" name="quinta" value=$result[11]></td>	  
		  </tr>

		  <tr>
		    <td>Sexta-feira</td>
		    <td><input type="checkbox" name="sexta" value=$result[12]></td>	  
		  </tr>

		  <tr>
		    <td>Sábado</td>
		    <td><input type="checkbox" name="sabado" value=$result[13]></td>	  
		  </tr>

		  <tr>
		    <td>Domingo</td>
		    <td><input type="checkbox" name="domingo" value=$result[14]></td>	  
		  </tr>

		</table> 



	</center> 	
	 	<input type='hidden' name='cpf_old' value='<?= $_POST['cpf'] ?>'>
          
          

          <input class="btn-primary" type='submit' value='Alterar'>
        </form>
        </center>
 	</fieldset>

 	
 </body>
 </html>