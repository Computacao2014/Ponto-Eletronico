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
			width: 150px;
			//margin: 200px;
			margin-left: 530px;
			margin-top: 100px;
			border-radius: 15px 50px 30px 5px;
			background-color: #3CBC8D;

		}
		html{
			
			background-image: linear-gradient(135deg, white, blue);
		}
	</style>
</head>

<body>
	<h1><a href="<?= "http://www.uespi.br/site/" ?>"><?= "Uespi" ?></a></h1> 



	<hr>
	<h3>Ponto Eletronico Gerente Geral:</h3>
	
	<hr>
	
	<form method="post" action="userautenticGGeral.php">
		<fieldset>
			
		Matricula: <input type="text" name="matricula">
		<br>
		Senha: <input type="password" name="senha"> 
		<br>
		<input type="submit">
		</fieldset>
	</form>


</body>

</html>