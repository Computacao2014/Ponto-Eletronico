<?php 

include("Pessoa.php");

class GerenteSetor extends Pessoa
{
	private $nomeSetor;

	public function setNomeSetor($nomeSetor){
    	if(strlen($nomeSetor) == 0)
        	throw new Exception("Setor invalido");
    	else
        	$this->nomeSetor = $nomeSetor;
	}

	public function getNomeSetor(){ 
    	return $this->nomeSetor; 
	}

	
}
?>