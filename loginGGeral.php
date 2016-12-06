<?php 
define("Tiluto", "Primeira constante");

?>

<html>
<head> 
	<style>
		fieldset input{
			width: 100%;
			margin-bottom: 10px;
			background-color: rgb(150,150,255);
		}
		fieldset legend{
			font-size: 26px;
		}
		fieldset{
			width: 150px;
			//margin: 200px;
			margin-left: 530px;
			margin-top: 100px;
			border-radius: 15px ;
			background-color: white;

		}
		html{
			
			background-color: rgb(150,150,255);
		}

		
	</style>
	<br><br>
	<img src="imagens/logouespi.png">
	<hr>
</head>

<body>
	<form method="post" action="userautenticGGeral.php">
		<fieldset>
		<center>
		<img src='imagens/imgponto.png'><br><hr>	
		Matricula: <input type="text" name="matricula" required="">
		<br>
		Senha: <input type="password" name="senha" required=""> 
		<br>
		<input type="submit">
		</center>
		</fieldset>
	</form>


</body>

</html>