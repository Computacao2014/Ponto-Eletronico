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
 		input{
 			width: 400px;
 			margin-left: 100px;

 		}
 		fieldset{
 			margin-left: 300px;
 			margin-top: 50px;
 			background-color: white;
 			width: 400px;
 			border-radius: 10px;
 		}
 		html{
 			background-color: rgb(150,150,255);
 		}
 		input{
		    background-color: rgb(150,150,255);
		    color: red;
		    padding: 3px 5px;
		    text-align: center; 
		    display: inline-block;
		    width: 250px;
		   margin-left: 150px;
		    font-size: 14px;
		   
    		
		}

		input:hover, input:active {
		    background-color: rgb(110,110,255);
		    color: black;
		}
 	</style>
 	
 </head>
 
  <img src="imagens/logouespi.png" class="img-responsive">
  <center><h1>Edita Funcionários</h1></center>
  <hr>


 <body>
 	
 	<fieldset class='form-inline'>
 	<center>
	 <form method='post' action='updateFuncionario.php'>

	 	<label>Nome:</label>
	 	<input type='text' name='nome' value='<?php echo $result[0]; ?>'>

	 	<label>Cpf:</label>
	 	<input type='text' name='cpf' value='<?php echo $result[1]; ?>' >

	 	<label>Rg:</label>
	 	<input type='text' name='rg' value='<?php echo $result[2]; ?>'>

	 	<label>Telefone:</label>
	 	<input type='text' name='telefone' value='<?php echo $result[3]; ?>'>

	 	<label>Email:</label>
	 	<input type='text' name='email' value='<?php echo $result[4]; ?>'>

	 	<label>Senha:</label>
	 	<input type='text' name='senha' value='<?php echo $result[5]; ?>'>
	 	
	 	
	 	<input type='hidden' name='cpf_old' value='<?= $_POST['cpf'] ?>'>
          
          

          <input class="btn-primary" type='submit' value='Alterar'>
        </form>
        </center>
 	</fieldset>

 	
 </body>
 </html>