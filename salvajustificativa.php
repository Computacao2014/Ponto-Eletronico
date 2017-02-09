<?php 

	session_start();
    if (!isset($_SESSION["cpf"]) || !isset($_SESSION["senha"])) {
        header("Location: loginFuncionario.php");
        exit;
    }else
    {
        
    }

$causa = $_POST['causa'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$cpf = $_SESSION['cpf'];


$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 

$sql = mysqli_query($conexao,"SELECT * FROM Justificativa WHERE cpf = '$cpf' and data = $data");
$fetch = mysqli_num_rows($sql);

if($fetch = 0){
	$sql = mysqli_query($conexao,"INSERT INTO Justificativa
VALUES('$causa','$data','$descricao','$cpf',0)");

	echo "
				
				<script type=\"text/javascript\">
					setTimeout(\"window.location='painelfuncionario.php'\",0);
					alert(\"Justificativa Salva com sucesso!\");
				</script>
			";
}else{
	echo "
				
				<script type=\"text/javascript\">
					setTimeout(\"window.location='painelfuncionario.php'\",0);
					alert(\"Justificativa Já Resgistrada!\");
				</script>
			";
}





 ?>