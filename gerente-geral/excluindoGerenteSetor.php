<<html>
<head>
	<title>Remover Gerente de Setor</title>
</head>
<body>

<?php

include("../classes/BancoDados.php");

$bd = new BancoDados();
$conexao = $bd->getConexao();

$cpf = $_POST['cpf'];


$gerentesSetor = mysqli_query($conexao,"DELETE * FROM gerentesetor WHERE cpf = {$cpf}");

header("Location: ../gerente-geral/loginGGeral.php");
 		exit;


?>

</body>
</html>


