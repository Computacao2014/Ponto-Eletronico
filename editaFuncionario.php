<?php 


$cpf = $_POST['matricula'];

function updateGerente(){

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = "UPDATE gerentegeral SET nome='$this->nome', cpf='$this->cpf', rg='$this->rg' ,senha='$this->senha', email='$this->email',telefone='$this->telefone' WHERE matricula=$this->matricula";

mysqli_query($conexao,$sql);
}

function readGerente($busca){
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM tabelafuncionario WHERE cpf = $busca") or die("usuario n encontrado");
 return mysqli_fetch_row($sql);
}
function deleteGerente($busca){
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");



$sql = "DELETE FROM tabelafuncionario WHERE matricula= $busca";

mysqli_query($conexao, $sql);
}
 $result = readGerente($cpf);
function teste(){
	echo "string";
}
 ?>
 <html>
 <head>
 	<title>Funcionário</title>
 	<style type="text/css">
 		label{
 			
 			
 			
 		}
 		fieldset{
 			margin-left: 300px;
 			margin-top: 200px;
 			background-color: white;
 			width: 150px;
 			border-radius: 10px;
 		}
 		html{
 			background-color: rgb(150,150,255);
 		}
 	</style>
 </head>
 <body>
 	<fieldset>

	 	<label>Nome:</label>
	 	<input type='text' value='<?php echo $result[0]; ?>'>

	 	<label>Cpf:</label>
	 	<input type='text' value='<?php echo $result[1]; ?>' name='cpf'>

	 	<label>Rg:</label>
	 	<input type='text' value='<?php echo $result[2]; ?>'>

	 	<label>Telefone:</label>
	 	<input type='text' value='<?php echo $result[3]; ?>'>

	 	<label>Email:</label>
	 	<input type='text' value='<?php echo $result[4]; ?>'>

	 	<label>Senha:</label>
	 	<input type='text' value='<?php echo $result[5]; ?>'>

	 	<label>Escala:</label>
	 	<input type='text' value='<?php echo $result[6]; ?>'>

	 	<label>Função:</label>
	 	<input type='text' value='<?php echo $result[7]; ?>'>

	 	<label>IdSetor:</label>
	 	<input type='text' value='<?php echo $result[8]; ?>'>

	 	<label>Horas Semanais:</label>
	 	<input type='text' value='<?php echo $result[9]; ?>'>
	 	
	 	<input type="button" value="Deletar" onclick="deleta();">
 	</fieldset>

 	<script type="text/javascript">

			var request = getXmlHttp();

			function deleta(){
			  var nm = document.getElementById("cpf").value;
			  
			  var url= "deletaFuncionario.php?nome="+nm;
			  request.open("GET", url, true);
			  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			  
			  request.send(null);
			}

			
			  
</script>
 </body>
 </html>