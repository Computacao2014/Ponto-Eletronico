<?php 
include("GerenteSetor.php");

 ?>

<?php 



$gerentesetor = new GerenteSetor();

$gerentesetor->nome = $_POST['nome'];
$gerentesetor->cpf = $_POST['cpf'];
$gerentesetor->rg = $_POST['rg'];
$gerentesetor->email = $_POST['email'];
$gerentesetor->senha = $_POST['senha'];
$gerentesetor->telefone = $_POST['telefone'];
$gerentesetor->matricula = $_POST['matricula'];
$gerentesetor->id_setor = $_POST['id_setor'];

$gerentesetor->createGerente();

header("Location: painelgerentegeral.php");
 		exit;
?>
</body>
</html>
