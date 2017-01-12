<?php 
	function retornaMinutos($hora){
		$minutos = ($hora[0]*600 + $hora[1]*60)+($hora[3]*10 + $hora[4]);
		return $minutos;
	}
	function retornaDifMin($min1,$min2){
		return$min2 - $min1;
	}


 ?>
<?php 
	
	
 		$cpf = $_POST['cpf'];
 	
 ?>
<html>

<head>
	<title>Ponto Eletronico</title>
	<style type="text/css">
		
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		    margin-left: 0px;
			margin-top: 0px;
		}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
	
		
		img {	
			border: 1px solid #ddd;
    		border-radius: 4px;
    		padding: 5px;
    		 
		}
		input[type=submit]{
		    background-color: #333;
		    color: white  ;
		    border-color: #333;
		    padding: 14px 16px;
		    }
		input:hover{
		    background-color: #111;
		    
		}  
	
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<img src="imagens/logouespi.png">
        <br><br>
</head>
<body>

	<ul>

        <li><a class="active" href="painelfuncionario.php">Página Funcionário</a></li>
        <li><a href="#">Bater Ponto</a></li>
        <li><a href="">Relatório</a></li>
        <li><a href="logout.php">Sair</a></li>
	</ul>

	<?php 
		date_default_timezone_set('America/Sao_Paulo');
	 ?>
	
 	
	<fieldset>
		<center>

		
		<form method="post" action="testhora.php">
			<input type='hidden' value='<?= $cpf ?>' name='cpf'>
			<input type='hidden' value='1' name='op'>
			<input type="submit" value='Bater Entrada'>
		</form>
		<hr>
		<form method="post" action="testhora.php">
			<input type='hidden' value='<?= $cpf ?>' name='cpf'>
			<input type='hidden' value='0' name='op'>
			<input type="submit" value='Bater Saida'>
		</form>
	
		</center>
	</fieldset>
	
</body>
</html>