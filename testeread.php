<?php 
include("GerenteGeral.php");

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM gerentegeral ") or die("usuario n encontrado");
$rows = mysqli_num_rows($sql);

 


 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
    background-color: #fff;
}
table#t01 th {
    color: white;
    background-color: black;
}

	</style>
</head>
<body>
<table id="t01">
  <tr>
    <th>MATRICULA</th>
    <th>NOME</th> 
  
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>
    		<td><?= $fetch[6] ?></td>
    		<td><?= $fetch[0] ?></td> 
    		
  		</tr>
  <?php }?>		

</table>
</body>
</html>