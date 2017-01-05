<?php 
include("GerenteGeral.php");
$setor=$_POST['id_setor'];
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM tabelafuncionario WHERE id_setor = '$setor'") or die("usuario n encontrado");
$rows = mysqli_num_rows($sql);


 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
  html{
    background-color: rgb(150,150,255);
  }
		table#t01 tr:nth-child(even) {
    background-color: rgb(150,150,255);
    
}
table#t01 tr:nth-child(odd) {
    background-color: white;
    
    
}
table#t01 th {
    color: white;
    background-color: rgb(140,140,255);
    
    width: 200px;
}


	</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>
<div class="page-header">
  <img src="imagens/logouespi.png" class="img-responsive">
  <center><h1>Listagem de Funcionários</h1></center>

</div>  

<body>
<center> 

<table id="t01" class='table-condensed'>
  <tr>
    <th>MATRICULA</th>
    <th>NOME</th> 
    
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>
    		<td><?= $fetch[1] ?></td>
    		<td><?= $fetch[0] ?></td>
        <td><form method='post' action='deletaFuncionario.php'>
          
          <input type='hidden' name='cpf' value='<?= $fetch[1] ?>'>
          <input class="btn btn-danger" type='submit' value='Deletar'>
        </form></td>
    		<td><form method='post' action='editaFuncionario.php'>
          
          <input type='hidden' name='cpf' value='<?= $fetch[1] ?>'>
          <input class='btn btn-success' type='submit' value='Editar'>
          
        </form></td>

  		  </tr>

  <?php }?>		
    

</table>

   

   </center>
</body>
</html>