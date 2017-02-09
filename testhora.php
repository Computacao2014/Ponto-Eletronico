
<?php 
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");


	function retornaMinutos($hora){
		$minutos = ($hora[0]*600 + $hora[1]*60)+($hora[3]*10 + $hora[4]);
		return $minutos;
	}
	function retornaDifMin($min1,$min2){
		return$min2 - $min1;
	}

	//Calculo de hora
	date_default_timezone_set('America/Sao_Paulo');
	$hora = retornaMinutos(date('H:i'));
	$opcao = $_POST['op'];
	$data = date("Y-M-D");
	$cpf = $_POST['cpf'];
	
	
	if($opcao == '1'){

		$sql = mysqli_query($conexao,"SELECT * FROM tabelaponto WHERE id_funcionario = '$cpf' and data = CURDATE()");
		$fetch = mysqli_fetch_row($sql);

		if(is_null($fetch[0] )){

			$sql = mysqli_query($conexao,"INSERT INTO tabelaponto
		VALUES('$hora' , 0 , CURDATE() , '$cpf', 0,0)");

			echo "
				
				<script type=\"text/javascript\">
					setTimeout(\"window.location='painelfuncionario.php'\",0);
					alert(\"Entrada Registrada com sucesso.\");
				</script>
			";

		}

		elseif ($fetch[0] != 0) {

			echo "
				
				<script type=\"text/javascript\">
					setTimeout(\"window.location='painelfuncionario.php'\",0);
					alert(\"Entrada JÁ Registrada.\");
				</script>
			";	


		}

		else{
			
		}

	
	}elseif($opcao == '0'){

		$sql = mysqli_query($conexao,"SELECT * FROM tabelaponto WHERE id_funcionario = '$cpf' and data = CURDATE()");
		$fetch = mysqli_fetch_row($sql);
		
		if($fetch[1] == 0){
			$sql = "UPDATE tabelaponto SET pontosaida ='$hora', jornadacomprida = '$hora' - pontoentrada WHERE id_funcionario= '$cpf' AND data = CURDATE()";
			mysqli_query($conexao,$sql);


		}else{

		}
		echo "
				
				<script type=\"text/javascript\">
				setTimeout(\"window.location='painelfuncionario.php'\",0);
					alert(\"Saída Registrada Com Sucesso.\");
				</script>
			";
		
	}
	


 ?>	
