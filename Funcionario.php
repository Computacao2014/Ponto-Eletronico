<?php 

include("Pessoa.php");

class Funcionario extends Pessoa
{
	public $id_setor;
	public $id_funcao;
	public $id_emp;
	public $id_carga_hrs;
	public $segunda;
	public $terca;
	public $quarta;
	public $quinta;
	public $sexta;
	public $sabado;
	public $domingo;

	

function createFuncionario(){

$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 

$sql = mysqli_query($conexao,"INSERT INTO tabelafuncionario(nome,cpf,rg,telefone,email,senha,segunda,terca,quarta,quinta,sexta,sabado,domingo,id_setor,id_funcao,id_caragahoraria,id_emp)

VALUES('$this->nome' , '$this->cpf' , '$this->rg' , '$this->telefone' , '$this->email' , '$this->senha' ,'$this->segunda',
 '$this->terca', '$this->quarta', '$this->quinta' , '$this->sexta', '$this->sabado', '$this->domingo',
 '$this->id_setor', '$this->id_funcao' ,'$this->id_carga_hrs', '$this->id_emp')");
}
	
}
?>