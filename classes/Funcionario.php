<?php 

include("Pessoa.php");

class Funcionario extends Pessoa{

	private $nomeSetor;
	private $escala;
	private $cargaHr;

	public function setNomeSetor($nomeSetor){
    	if(strlen($nomeSetor) == 0)
        	throw new Exception("Setor invalido");
    else
        $this->nomeSetor = $nomeSetor;
}

public function getNomeSetor(){ 
    return $this->nomeSetor; 
}

public function setEscala($escala){
        $this->escala = $escala;
}

public function getEscala(){ 
    return $this->escala; 
}

public function setCargaHr($cargaHr){   
        $this->cargaHr = $cargaHr;
}

public function getCargaHr(){ 
    return $this->cargaHr; 
}


}
?>