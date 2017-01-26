<?php 

include("Pessoa.php");

class GerenteSetor extends Pessoa
{
	public $id_setor;
	public $sql;

	

function createGerente(){

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 

$this->sql = mysqli_query($conexao,"INSERT INTO gerentesetor(nome,cpf,rg,senha,email,matricula,telefone,id_setor)
VALUES('$this->nome' , '$this->cpf' , '$this->rg' , '$this->senha' , '$this->email' , '$this->matricula' , '$this->telefone', '$this->id_setor')");

$this->sql = mysqli_query($conexao,"UPDATE setor SET status = 1 WHERE id_setor = $this->id_setor");

}
}

?>