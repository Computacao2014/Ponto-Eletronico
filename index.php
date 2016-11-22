 <?php 
 ?>
<html>
<head>
	<title> SEJA BEM VINDO </title>
	
	<style>
		h2{
			direction: rtl;
			word-spacing: 10px;
		}
		fieldset{
			width: 150px;
			//margin: 200px;
			margin-left: 480px;
			margin-top: 100px;
			border-radius: 15px;
			background-color: white;

		}
		fieldset input{
			width: 1000%;
			margin-bottom: 10px;


		}
		html{
			
			background-color: rgb(150,150,255);
			
		}
		
		a:link, a:visited {
		    background-color: rgb(150,150,255);
		    color: white;
		    padding: 8px 14px;
		    text-align: center; 
		    display: inline-block;
		    width: 250px;
		    border-radius: 15px;
		    font-size: 24px;
		    -webkit-transition-duration: 0.4s; /* Safari */
    		transition-duration: 0.40s;
    		border-spacing: 10px;
		}

		a:hover, a:active {
		    background-color: white;
		    color: rgb(150,150,255);
		}

	</style>
	<br><br>
	<img src="imagens/logouespi.png">
	<hr>
</head>
<body>
	<fieldset>
		<center>
		<img src='imagens/imgponto.png'>
		
		<h1><a href="<?= "loginGGeral.php" ?>"><?= "<center> Gerente Geral Online</center>" ?></a></h1>
		<h1><a href="<?= "loginGSetor.php" ?>"><?= "<center> Gerente Setor Online</center>" ?></a></h1>
		<h1><a href="<?= "loginFuncionario.php" ?>"><?= "<center> Funcionario Online</center>" ?></a>
		</center>
	</fieldset>		
</body>

</html>