<?php 

 ?>
<html>
<head>
	<title> Tela De Cadastro </title>
	<h2>Cadastro</h2>
	<style>
		fieldset{
			width: 700px;
			//margin: 200px;
			margin-left: 250px;
			margin-top: 100px;

		}
		fieldset input{
			width: 100%;
			margin-bottom: 10px;
		}

	</style>
</head>
<body>
	<form method="post" action="cadastrandoGerGeral.php">
		<fieldset>
		<legend>Cadastro Gerente Geral:</legend>	
		
		<label>Nome:</label>
		<input type="text" name="nome" required="">
		<label>Senha:</label>
		<input type="password" name="senha" required=""> 
		<label>Email:</label>
		<input pattern="^[A-Za-z0-9_]{1,15}@[A-Za-z0-9_]{1,15}.[A-Za-z0-9_]{1,10}$" type="text" name="email" required="">
		<label>Rg:</label>
		<input pattern="^[0-9]{7}$" type="text" name="rg" required="">
		<label>Cpf:</label>
		<input pattern="^[0-9]{11}$" type="text" name="cpf" required="">
		<label>Telefone:</label>
		<input pattern="^[0-9]{8,11}$" type="text" name="telefone">
		<label>Matricula:</label>
		<input type="text" name="matricula" required="">

		

		<input type="submit" value="Cadastrar">
		</fieldset>
	</form>

</body>
</html>