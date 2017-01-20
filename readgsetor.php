<?php 
include("GerenteGeral.php");

$setor=$_POST['id_setor'];
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM tabelafuncionario f, funcao fn, empresa e WHERE f.id_setor = '$setor' 
  AND f.id_funcao = fn.id_funcao AND f.id_emp = e.id_emp") or die("usuario n encontrado");
$rows = mysqli_num_rows($sql);
 ?>

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
<br>
<img src="imagens/logouespi.png">
<br><br>

<ul>

<li><a class="active" href="painelgerentesetor.php">Página Gerente Setor</a></li>
        <li><a href="cadastrofuncinario.php">Cadastrar Funcionário</a></li>
        <li><a href="#">Listar Funcionários Setor</a></li>
        <li><a href="logout.php">Sair</a></li>
</ul>

</body>

  
</head>

  
  

<body>
<center> 

<table id="t01" class='table-condensed'>
  <tr>
    <th>Cpf</th>
    <th>Nome</th>
    <th>Função</th>
    <th>Empresa</th>
    
  </tr>
  <?php while($fetch = mysqli_fetch_row($sql)){ ?>
        
        
        <tr>
        <td><?= $fetch[1] ?></td>
        <td><?= $fetch[0] ?></td>
        <td><?= $fetch[18] ?></td>
        <td><?= $fetch[22] ?></td>
        <td><form method='post' action='deletaFuncionario.php'>
          
          <input type='hidden' name='cpf' value='<?= $fetch[1] ?>'>
          <input class="btn btn-danger" type='submit' value='Deletar'>
        </form></td>
        <td><form method='post' action='editaFuncionario.php'>
          
          <input type='hidden' name='cpf' value='<?= $fetch[1] ?>'>
          <input class='btn btn-success' type='submit' value='Editar'>
          

        </form></td>

          <td><form method='post' action='editaEscala.php'>
          
          <input type='hidden' name='cpf' value='<?= $fetch[1] ?>'>
          <input class='btn btn-success' type='submit' value='Editar Escala'>
          
          
        </form></td>

        </tr>

  <?php }?>   
    

</table>

   

   </center>
</body>
</html>
