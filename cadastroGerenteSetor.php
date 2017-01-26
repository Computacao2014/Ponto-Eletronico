<?php 
session_start();
 	if (!isset($_SESSION["matricula"]) || !isset($_SESSION["senha"])) {
 		header("Location: loginGGeral.php");
 		exit;
 	}else
 	{
 		
 	}

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

 ?>

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

			fieldset{
				width: 700px;
				margin-left: 0px;
				margin-top: 0px;
			}

			fieldset input{
				margin-left: 250px;
				width: 100%;
				margin-bottom: 10px;
			}

		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	</head>


	<body>
		
			<img src="imagens/logouespi.png">
		<br><br>

		<ul>
  			<li><a class="active" href="painelgerentegeral.php">Página Gerente Geral</a></li>
  			<li><a href="cadastroGerenteSetor.php">Cadastrar Gerente Setor</a></li>
  			<li><a href="listargsetor.php">Listar Gerente Setor</a></li>
  			<li><a href="testeread.php">Listar Funcionários Geral</a></li>
  			<li><a href="logout.php">Sair</a></li>
		</ul>

  	<form method="post" action="cadastrandoGerSetor.php">
			<fieldset>
				<center><h3>Cadrastrar Gerente Setor:</h3>
				
				<input type="text" name="nome" placeholder="Nome" required=""><br>
				<input type="password" placeholder="Senha" name="senha" required=""> 
				<input pattern="^[A-Za-z0-9_]{1,15}@[A-Za-z0-9_]{1,15}.[A-Za-z0-9_]{1,10}$" type="text" placeholder="Email" name="email" required="">
				<input pattern="^[0-9]{7}$" type="text" placeholder="Rg" name="rg" required="">
				<input pattern="^[0-9]{11}$" type="text" name="cpf" placeholder="Cpf" required="">
				<input pattern="^[0-9]{1,15}$" type="text" placeholder="Telefone" name="telefone">
				<input type="text" name="matricula" placeholder="Matrícula" required="">
				
				<?php 

				$sql = mysqli_query($conexao,"SELECT nome_setor,id_setor FROM setor WHERE status = 0") or die("Usuário não encontrado");
 				
 				?>
				<select class="" name="id_setor" type="text" >

					<?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
					    <option value="<?= $fetch[1] ?>"><?= $fetch[0] ?></option>
					<?php }?>	
					
				</select>


			<br><br></center>

			</fieldset>
			<center><input class="btn btn-success"  type='submit' value='Cadastrar'></center>
	</form>


	
	</body>
</html>