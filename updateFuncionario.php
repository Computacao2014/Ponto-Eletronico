<?php 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
//$escala = $_POST['escala'];
//$hrs = $_POST['hrssemanais'];
$id_funcao = $_POST['id_funcao'];
$id_setor = $_POST['id_setor'];
$cpf_old = $_POST['cpf_old'];


$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = "UPDATE tabelafuncionario SET nome='$nome' , cpf='$cpf' , rg='$rg' , senha='$senha' , email='$email' , telefone='$telefone' WHERE cpf='$cpf_old'";
//adicionar no update
mysqli_query($conexao,$sql);




header("Location: testeread.php");
 		exit;
 ?>
