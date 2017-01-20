<html>
<head>
	<style type="text/css">
		input[type=text]{
			white-space: nowrap; 
		    width: 300px; 
		    border: 1px solid #000000;
		    overflow: hidden;
		    text-overflow: clip; 
		    border-radius: 5px;
		    margin-left: 100px;
		}
		input[type=date]{
			width: 200px;
			margin-left: 100px;
			border-radius: 5px;
		}
		{

		}
		textarea{
			width: 500px;
			height: 200px;
		}
	</style>
	<title>
	</title>
</head>

<form method="post" action="salvajustificativa.php">

		<fieldset>

		<h3>justificativa:</h3>	

		<input type ="text" name = "nome" placeholder="Nome"><br>
		<input type ="text" name = "cpf" placeholder="cpf" required=""><br>
		<input type ="date" name = "data" placeholder="dd/mm/aaaa" required=""><br>
		<input type ="text" name = "causa" placeholder="causa" required=""><br>
		<textarea type ="text" name = "descricao" placeholder="descrição" ></textarea><br>
		<input type = "submit"><br>


		</fieldset>


</form>
		
<body>

</body>
</html>