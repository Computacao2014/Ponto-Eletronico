
<?php 

$cpf = $_POST['cpf'];


include("banco.php");



$sql = "DELETE FROM tabelafuncionario WHERE cpf= $cpf";

if(mysqli_query($conexao, $sql)!= 0){

echo "
				
				<script type=\"text/javascript\">
					setTimeout(\"window.location='readgsetor.php'\",0);
					alert(\"Funcionário apagado com sucesso.\");
				</script>
			";	
		}else{
			echo "
				
				<script type=\"text/javascript\">
				setTimeout(\"window.location='readgsetor.php'\",0);
					alert(\"Não foi possível apagar funcionário.\");
				</script>
			";	
		}
