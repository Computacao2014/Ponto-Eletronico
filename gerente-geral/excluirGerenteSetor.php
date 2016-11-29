<html>
<head>
	<title> Remover Gerente de Setor </title>
	<h2>Remover Gerente de Setor</h2>
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
	<form method="post" action="excluindoGerenteSetor.php">
		<fieldset>
		<legend>Remover Gerente Setor:</legend>	
		
		<label>Cpf:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="cpf" required="">
		
		<input type="submit" value="Excluir">
		</fieldset>
	</form>

	<a href="<?= "../gerente-geral/painelgerentegeral.php" ?>"><?= "Voltar" ?></a>
	
</body>
</html>