
<?php 

$matricula = $_POST['matricula'];


include("banco.php");



$sql = "DELETE FROM gerentesetor WHERE matricula= $matricula";

mysqli_query($conexao, $sql);

header("Location: listargsetor.php");
 		exit;
 ?> 