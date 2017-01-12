<!DOCTYPE html>
<html>
<head>
	<title>Recuperar senha</title>
<style>

fieldset{
    background-color: #333;
    margin-left: 500px;
    width: 240px;
}
fieldset label{
    color: white;
}
fieldset input[type=tex]{
    border-radius: 5px;
}
fieldset input[type=submit]{
    padding: 2px 10px;
    background-color: green;
    color: black;
    border-radius: 5px;
}
</style>
   
    <img src="imagens/logouespi.png"><hr>
    <center><h2>Recuperar Senha Gerente Geral</h2></center>
</head>


<body>
	<form method="post" action="enviaEmail.php">
		<fieldset>	
		
		
		<label>Informe Seu Email:</label><br>
		<input type="text" name="email" required="">

		<input type="submit" value="Enviar">
		</fieldset>
	</form>




</body>
</html>