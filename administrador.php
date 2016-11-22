 <?php 
 ?>
<html>
<head>
	<title> SEJA BEM VINDO </title>
	<img src="imagens/adm.png">
	<style>
		fieldset{
			width: 700px;
			//margin: 200px;
			margin-left: 250px;
			margin-top: 100px;

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
		    
		    font-size: 24px;
		    -webkit-transition-duration: 0.4s; /* Safari */
    		transition-duration: 0.40s;
    		border-spacing: 10px;
		}

		a:hover, a:active {
		    background-color: white;
		    color: rgb(150,150,255);
		}
		h1{
			 width: 275px;
			 font-size: 24px;
			 padding: 8px 14px;
			
			 border: 2px solid white; 
			 border-spacing: 10px;
			 border-radius: 10px;
			 margin-left: 150px;
		}
		img{
			border-radius: 10px;
		}

	</style>
</head>
<body>
<h1><a href="<?= "cadastroGerenteGeral.php" ?>"><?= "<center> Cadastrar Gerente Geral</center>" ?></a></h1>

</body>

</html>