<?php

include("Pessoa.php"); 

class GerenteGeral extends Pessoa
{

	private $matricula;

	public function setMatricula($matricula)
	{
		if (strlen($matricula) == 0) {
			throw new Exception("Matricula invalida");
		}
		else{
			$this->matricula = $matricula;
		}
		
	}

	public function getMatricula()
	{
		return $this->matricula;
	}

	public function deleteGerenteGeral($conexao)
	{
		$sql = mysqli_query($conexao,"	DELETE FROM gerentegeral WHERE matricula = {$this->getMatricula}");
	}

	
}
?>