<?php 
include("GerenteGeral.php");

$cpf=$_POST['cpf'];
function readGerente($cpf){
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM tabelafuncionario WHERE cpf = $cpf") or die("usuario n encontrado");
 return mysqli_fetch_row($sql);
}

 $result = readGerente($cpf);

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
input[type=submit]{
    background-color: #333;
    color: white  ;
    border-color: #333;
    padding: 14px 16px;
    }   
input:hover{
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

        <li><a class="active" href="painelfuncionario.php">Página Funcionário</a></li>

        <li><form method='post' action="testecheckin.php">
            <input type="hidden" name="cpf" value="<?= $_POST['cpf']?>">
            <input type="submit" Value='Bater Ponto'>    
        </form></li>
         <li><form method='post' action="relatoriofuncionario.php">
            <input type="hidden" name="cpf" value="<?= $_POST['cpf']?>">
            <input type="submit" Value='Relatório'>    
        </form></li>
        <li><form method='post' action="#">
            <input type="hidden" name="cpf" value="<?= $_POST['cpf']?>">
            <input type="submit" Value='Exibir Escala Funcionário'>    
        </form></li>
        <li><a href="logout.php">Sair</a></li>
</ul>

</body>

  
</head>

  
  

<body>
<center> 

<table id="t01" class='table-condensed'>
        

      <tr>
          <td>Nome: </td>
          <td><?=$result[0]?></td>      
        </tr>

        <tr>
          <td>Cpf: </td>
          <td><?=$result[1]?></td>      
        </tr>

      <tr>
        <td>Dia da Semana</td>
        <td>Ativo</td>      
      </tr>

      <tr>
        <td>Segunda-feira</td>
        <td><?php  
        if ($result[8])
          echo "Sim";
        else
          echo "Não";
        ?></td>
        

            
      </tr>

       <tr>
        <td>Terça-feira</td>
        <td><?php  
        if ($result[9])
          echo "Sim";
        else
          echo "Não";
        ?></td>
          
      </tr>

      <tr>
        <td>Quarta-feira</td>
        <td><?php  
        if ($result[10])
          echo "Sim";
        else
          echo "Não";
        ?></td>
          
      </tr>

      <tr>
        <td>Quinta-feira</td>
        <td><?php  
        if ($result[11])
          echo "Sim";
        else
          echo "Não";
        ?></td>
           
      </tr>

      <tr>
        <td>Sexta-feira</td>
        <td><?php  
        if ($result[12])
          echo "Sim";
        else
          echo "Não";
        ?></td>
         
      </tr>

      <tr>
        <td>Sábado</td>
        <td><?php  
        if ($result[13])
          echo "Sim";
        else
          echo "Não";
        ?></td>
          
      </tr>

      <tr>
        <td>Domingo</td>
        <td><?php  
        if ($result[14])
          echo "Sim";
        else
          echo "Não";
        ?></td>
          
      </tr>

    </table> 

   

   </center>
</body>
</html>
