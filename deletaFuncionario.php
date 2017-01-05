
<?php 

$cpf = $_POST['cpf'];


include("banco.php");



$sql = "DELETE FROM tabelafuncionario WHERE cpf= $cpf";

mysqli_query($conexao, $sql);

header("Location: testeread.php");
 		exit;
 ?> 