<?php

public $host = "localhost";
public $user = "root";
public $pass = "php2016";
public $banco = "pontoeletronico";
public $conexao;

public getConexao(){

	$this->conexao = mysqli_connect($this->host , $this->user , $this->pass) or die(mysql_error());
	mysqli_select_db($conexao , $banco) or die("erro no banco");
	return $this->conexao;

}

 ?>