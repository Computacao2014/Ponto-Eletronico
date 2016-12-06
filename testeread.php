<?php 
include("GerenteGeral.php");

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM tabelafuncionario ") or die("usuario n encontrado");
$rows = mysqli_num_rows($sql);

 
function imprimeT($the){
  echo "string";
}

 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		table#t01 tr:nth-child(even) {
    background-color: rgb(150,150,255);
    border-radius: 5px;
}
table#t01 tr:nth-child(odd) {
    background-color: white;
    border-radius: 3px;
}
table#t01 th {
    color: white;
    background-color: rgb(140,140,255);
    border-radius: 5px;
}


	</style>
</head>
<body>
<center> 
<table id="t01">
  <tr>
    <th>MATRICULA</th>
    <th>NOME</th> 
  
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>

    		<td><?= $fetch[1] ?></td>
    		<td><?= $fetch[0] ?></td> 
    		
  		</tr>
  <?php }?>		
    

</table>
<form method='post' action='editaFuncionario.php'>
      <input type='text' name='matricula'>
      <input type='submit'>
   </form>
   </center>
</body>
</html>