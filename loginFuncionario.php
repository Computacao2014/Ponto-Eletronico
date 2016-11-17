<?php 
define("Tiluto", "Primeira constante");

?>



<html>
<head> 
	<style>
		fieldset input{
			width: 100%;
			margin-bottom: 10px;
		}
		fieldset legend{
			font-size: 26px;
		}
		fieldset{
			width: 400px;
			position: static;
			background-color: purple ;
			border-style: outset;
			border-left-color: rgb(123,154,111);
			margin-left: 350px;
		}
		html{
			
			background-image: linear-gradient(135deg, white, blue);
		}
	</style>
</head>

<body>
	<h1><a href="<?= "http://www.uespi.br/site/" ?>"><?= "Uespi" ?></a></h1> 



	<hr>
	<h3>Ponto Eletronico Funcionario:</h3>
	
	<hr>
	
	<form method="post" action="userautenticFuncionario.php">
		<fieldset>
			
		Cpf: <input type="text" name="cpf">
		<br>
		Senha: <input type="password" name="senha"> 
		<br>
		<input type="submit">
		</fieldset>
	</form>


</body>

</html>