<?php 
session_start();
  if (!isset($_SESSION["matricula"]) || !isset($_SESSION["senha"])) {
    header("Location: loginGGeral.php");
    exit;
  }else
  {
    
  }

include("GerenteGeral.php");

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM gerentesetor g, setor c where g.id_setor=c.id_setor") or die("Usuário não encontrado");
$rows = mysqli_num_rows($sql);

 ?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-left: 0px;
  margin-top: 0px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>


<body>

<img src="imagens/logouespi.png">
<br><br>

<ul>

 <li><a class="active" href="painelgerentegeral.php">Página Gerente Geral</a></li>
  <li><a href="cadastroGerenteSetor.php">Cadastrar Gerente Setor</a></li>
  <li><a href="listargsetor.php">Listar Gerente Setor</a></li>
  <li><a href="testeread.php">Listar Funcionários Geral</a></li>
  <li><a href="logout.php">Sair</a></li>
</ul>

</body>

  
</head>

  
  
 

<body>
<center> 

<table id="t01" class='table-condensed'>
  <tr>
    <th>Matrícula</th>
    <th>Nome</th> 
    <th>Nome do Setor</th> 

    
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>
        <td><?= $fetch[5] ?></td>
        <td><?= $fetch[0] ?></td>
        <td><?= $fetch[9] ?></td>

        <td><form method='post' action='deletaGSetor.php'>
          
          <input type='hidden' name='matricula' value='<?= $fetch[5] ?>'>
          <input type='hidden' name='nome' value='<?= $fetch[0] ?>'>

          <input type='hidden' name='id_setor' value='<?= $fetch[8] ?>'>

          <input class="btn btn-danger" type='submit' value='Deletar'>


        </form></td>
        <td><form method='post' action='editaGSetor.php'>
          
          <input type='hidden' name='matricula' value='<?= $fetch[5] ?>'>

          <input type='hidden' name='nome' value='<?= $fetch[0] ?>'>

          <input type='hidden' name='id_setor' value='<?= $fetch[8] ?>'>

          <input class='btn btn-success' type='submit' value='Editar'>
          
        </form></td>

        </tr>

  <?php }?>   
    

</table>

   

   </center>
</body>
</html>