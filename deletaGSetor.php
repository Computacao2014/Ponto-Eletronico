
<?php 

$matricula = $_POST['matricula'];
$setor = $_POST['id_setor'];

include("banco.php");

$sql = "UPDATE setor SET status = 0 WHERE id_setor = $setor";
mysqli_query($conexao, $sql);
$sql = "DELETE FROM gerentesetor WHERE matricula= $matricula";
if(mysqli_query($conexao, $sql)!= 0){

echo "	
				
				<script type=\"text/javascript\">
					setTimeout(\"window.location='listargsetor.php'\",0);
					alert(\"Gerente de Setor apagado com sucesso.\");
				</script>
			";	
		}else{
			echo "
				
				<script type=\"text/javascript\">
				setTimeout(\"window.location='listargsetor.php'\",0);
					alert(\"Não foi possível apagar Gerente de Setor.\");
				</script>
			";	
		}
