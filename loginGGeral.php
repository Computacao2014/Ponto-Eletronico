<html>
<head> 
	<style>
		fieldset input{
			width: 30%;
			margin-bottom: 10px;
			background-color: rgb(255,255,255);
		}
		fieldset input[type=tex]{
    border-radius: 5px;
}
fieldset input[type=submit]{
    padding: 2px 10px;
    
    color: black;
    border-radius: 5px;
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
<form method="post" action="userautenticGGeral.php">
		<fieldset>
		<center>

		<img src='imagens/ggeral.png'><br>	<br><br>

		<h1> Login </h1>

		<input type="text" name="matricula" placeholder="Matrícula" required="">
		<br>
		<input type="password" name="senha" placeholder="Senha" required=""> 
		<br>


		<input type="submit" value="Enviar">

		<br>
		
		<a href="<?= "painelenviaremailGeral.php" ?>"><?= "Recuperar Senha" ?></a>

		</center>
		</fieldset>
	</form>


</body>

</html>