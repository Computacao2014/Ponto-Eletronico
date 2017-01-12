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
		
	</style>	
</head>

<body>
<form method="post" action="userautenticFuncionario.php">
		<fieldset>
		<center>

		<img src='imagens/banner_funcionario.png'><br>	<br><br>

		<h1> Login </h1>

		<input type="text" name="cpf" placeholder="Cpf" required="">
		<br>
		<input type="password" name="senha" placeholder="Senha" required=""> 
		<br>


		<input type="submit">

		<br><br><br><br><br>
		<a href="<?= "painelenviaremailFun.php" ?>"><?= "Recuperar Senha" ?></a>
		</center>
		</fieldset>
	</form>


</body>

</html>