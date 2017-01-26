
<?php

 include("Pessoa.php");

class GerenteGeral extends Pessoa {

function createGerente(){

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 

$sql = mysqli_query($conexao,"INSERT INTO gerentegeral(nome,cpf,rg,senha,email,matricula,telefone)
VALUES('$this->nome' , '$this->cpf' , '$this->rg' , '$this->senha' , '$this->email' , '$this->matricula' , '$this->telefone')") or die(mysql_error());

}

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

function readGerente(){
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");

$sql = mysqli_query($conexao,"SELECT * FROM gerentegeral WHERE matricula = 12345") or die("usuario n encontrado");
 return mysqli_fetch_row($sql);
}
function deleteGerente(){
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco");



$sql = "DELETE FROM gerentegeral WHERE matricula=12345";

mysqli_query($conexao, $sql);
}

}


?>

