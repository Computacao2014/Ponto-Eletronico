<?php 
define("Tiluto", "Primeira constante");

?>

<html>
<head> 
	<style>
		fieldset input{
			width: 30%;
			margin-bottom: 10px;
			background-color: rgb(255,255,255);
		}
		fieldset legend{
			font-size: 26px;
		}
		fieldset{
			width: 150px;
			//margin: 200px;
			margin-left: 200px;
			margin-top: 50px;
			border-radius: 15px ;
			background-color: white;
			font-color: blue;

		}
		html{
			
			background-color: rgb(255,255,255);
		}
		a{
			color: gray;
		}
		
		
	</style>
	
</head>

<body>

<form method="post" action="userautenticGSetor.php">
		<fieldset>
		<center>

		<img src='imagens/banner_gsetor.png'><br>	<br><br>

		<h1> Login </h1>

		<input type="text" name="matricula" placeholder="Matrícula" required="">
		<br>
		<input type="password" name="senha" placeholder="Senha" required=""> 
		<br>


		<input type="submit">

		<br>
		<a href="<?= "painelenviaremailSetor.php" ?>"><?= "Recuperar Senha" ?></a>
		</center>
		</fieldset>
	</form>


</body>

</html>