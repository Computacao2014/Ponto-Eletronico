<script type="text/javascript">
function exibeAlerta(){
	alert("nilson corno");
}

</script>
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
	$data = date("d/m/Y");
	$cpf = $_POST['cpf'];
	
	
	if($opcao == '1'){
		echo "<script type=\"text/javascript\"> alert(\"fsfsdf\"); 
		</script>";

		$sql = mysqli_query($conexao,"INSERT INTO tabelaponto(pontoentrada,pontosaida,data,id_funcionario, jornadacomprida)
		VALUES('$hora' , 0 , '$data' , '$cpf', 0)");
	}elseif($opcao == '0'){

		$sql = mysqli_query($conexao,"SELECT * FROM tabelaponto WHERE id_funcionario = '$cpf' and data = '$data'");
		$fetch = mysqli_fetch_row($sql);
		if($fetch[1] == 0){
			$sql = "UPDATE tabelaponto SET pontosaida ='$hora', jornadacomprida = '$hora' - pontoentrada WHERE id_funcionario= '$cpf' AND data = '$data'";
			mysqli_query($conexao,$sql);
		}else{
			
		}

		
		
	}
	
	header("Location: painelfuncionario.php");
 		exit;
 ?>	
