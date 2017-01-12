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
	 <form method='post' action='updateFuncionario.php'>
	 <center>
	 	<label>Nome:</label>
	 	<input type='text' name='nome' value='<?php echo $result[0]; ?>'>
	 	<br>
	 	<label>Cpf:</label>
	 	<input type='text' name='cpf' value='<?php echo $result[1]; ?>' >
	 	<br>
	 	<label>Rg:</label>
	 	<input type='text' name='rg' value='<?php echo $result[2]; ?>'>
	 	<br>
	 	<label>Telefone:</label>
	 	<input type='text' name='telefone' value='<?php echo $result[3]; ?>'>
	 	<br>
	 	<label>Email:</label>
	 	<input type='text' name='email' value='<?php echo $result[4]; ?>'>
	 	<br>
	 	<label>Senha:</label>
	 	<input type='text' name='senha' value='<?php echo $result[5]; ?>'>
	 	<br>	
	</center> 	
	 	<input type='hidden' name='cpf_old' value='<?= $_POST['cpf'] ?>'>
          
          

          <input class="btn-primary" type='submit' value='Alterar'>
        </form>
        </center>
 	</fieldset>

 	
 </body>
 </html>