<?php 
include("GerenteGeral.php");

session_start();
  if (!isset($_SESSION["cpf"]) || !isset($_SESSION["senha"])) {
    header("Location: loginFuncionario.php");
    exit;
  }else
  {
    
  }

$cpf=$_SESSION['cpf'];
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
td[id='sim']{
  background-color: green;
  color: white;
  border-radius: 3px;
}
td[id='nao']{
  background-color: red;
  color: white;
  border-radius: 3px;
}
td{
  background-color: #333;
  color: white;
  border-radius: 3px;
}     
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>



<body>
        
<img src="imagens/logouespi.png">
<br><br>

<ul>

        <li><a class="active" href="painelfuncionario.php">Página Funcionário</a></li>
        <li><a class="active" href="testecheckin.php">Bater Ponto</a></li>
        <li><a class="active" href="relatoriofuncionario.php">Relatório de Pontos</a></li>
        <li><a class="active" href="#">Exibir Escala Funcionário</a></li>
        <li><a href="logout.php">Sair</a></li>
</ul>

</body>

  
</head>

  
  

<body>
<center> 

<table id="t01" class='table-condensed'>
        

      <tr id='1'>
          <td>Nome: </td>
          <td><?=$result[0]?></td>      
        </tr>

        <tr id='1'>
          <td>Cpf: </td>
          <td><?=$result[1]?></td>      
        </tr>

     

      <tr>
        <td>Segunda-feira</td>
        <?php  if ($result[6]){ ?>
         <td id='sim'><?php echo "Sim"; ?></td> 
          <?php } else{?>
          <td id ='nao'><?php echo "Não"; ?>  </td>
          <?php } ?>
        

            
      </tr>

       <tr>
        <td>Terça-feira</td>
        <?php  if ($result[7]){ ?>
         <td id='sim'><?php echo "Sim"; ?></td> 
          <?php } else{?>
          <td id ='nao'><?php echo "Não"; ?>  </td>
          <?php } ?>
          
      </tr>

      <tr>
        <td>Quarta-feira</td>
        <?php  if ($result[8]){ ?>
         <td id='sim'><?php echo "Sim"; ?></td> 
          <?php } else{?>
          <td id ='nao'><?php echo "Não"; ?>  </td>
          <?php } ?>
          
      </tr>

      <tr>
        <td>Quinta-feira</td>
        <?php  if ($result[9]){ ?>
         <td id='sim'><?php echo "Sim"; ?></td> 
          <?php } else{?>
          <td id ='nao'><?php echo "Não"; ?>  </td>
          <?php } ?>
           
      </tr>

      <tr>
        <td>Sexta-feira</td>
        <?php  if ($result[10]){ ?>
         <td id='sim'><?php echo "Sim"; ?></td> 
          <?php } else{?>
          <td id ='nao'><?php echo "Não"; ?>  </td>
          <?php } ?>
         
      </tr>

      <tr>
        <td>Sábado</td>
        

        <?php  if ($result[11]){ ?>
         <td id='sim'><?php echo "Sim"; ?></td> 
          <?php } else{?>
          <td id ='nao'><?php echo "Não"; ?>  </td>
          <?php } ?>
        
          
      </tr>

     

      <tr>
        <td>Domingo</td>
       
        <?php  if ($result[12]){ ?>
         <td id='sim'><?php echo "Sim"; ?></td> 
          <?php } else{?>
          <td id ='nao'><?php echo "Não"; ?>  </td>
          <?php } ?>
        </td>
          
      </tr>

    </table> 

   

   </center>
</body>
</html>
