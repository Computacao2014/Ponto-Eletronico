<?php 


 ?>
<html>
<head>
	<title> Tela De Cadastro de Funcinario </title>
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
	<form method="post" action="cadastrandoFuncionario.php">
		<fieldset>
		<legend>Cadastro Funcionario:</legend>	
		


		<label>Nome:</label>
		<input type="text" name="nome" required="">

		<label>Senha:</label>
		<input type="password" name="senha" required=""> 

		<label>Email:</label>
		<input pattern="^[A-Za-z0-9_]{1,15}@[A-Za-z0-9_]{1,15}$" type="text" name="email" required="">
		
		<label>Rg:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="rg" required="">

		<label>Cpf:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="cpf" required="">

		<label>Telefone:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="telefone" required="">


		<label>Id Setor:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="idSetor" required="">

		<label>Funcao:</label>
		<input pattern="^[A-Za-z]{1,15}$" type="text" name="funcao" required="">


		<label>Horas semanais de trabalho:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="hrsemanais" required="">

		<label>Escala de Trabalho:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="escala" required="">

		<input type="submit" value="Cadastrar">
		</fieldset>
	</form>
	
</body>
</html>