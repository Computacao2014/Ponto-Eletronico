 <?php 
 ?>
<html>
<head>
	<title> SEJA BEM VINDO </title>
	<h2><center>PONTO ELETRONICO </center></h2>
	<style>
		h2{
			direction: rtl;
			word-spacing: 10px;
		}
		fieldset{
			width: 150px;
			//margin: 200px;
			margin-left: 530px;
			margin-top: 100px;
			border-radius: 15px 50px 30px 5px;
			background-color: #3CBC8D;

		}
		fieldset input{
			width: 1000%;
			margin-bottom: 10px;


		}
		html{
			
			background-color: 
			
		}
		
		a:link, a:visited {
		    background-color: white;
		    color: #3CBC8D;
		    padding: 8px 14px;
		    text-align: center; 
		    display: inline-block;
		    width: 250px;
		    border-radius: 15px 50px 30px 5px;
		    font-size: 24px;
		    -webkit-transition-duration: 0.4s; /* Safari */
    		transition-duration: 0.40s;
    		border-spacing: 10px;
		}

		a:hover, a:active {
		    background-color: #3CBC8D;
		    color: white;
		}

	</style>
</head>
<body>
	<fieldset>
		<h1><a href="<?= "gerente-geral/loginGGeral.php" ?>"><?= "<center> Gerente Geral Online</center>" ?></a></h1>
		<h1><a href="<?= "gerente-setor/loginGSetor.php" ?>"><?= "<center> Gerente Setor Online</center>" ?></a></h1>
		<h1><a href="<?= "funcionario/loginFuncionario.php" ?>"><?= "<center> Funcionario Online</center>" ?></a>
	</fieldset>		
</body>

</html>