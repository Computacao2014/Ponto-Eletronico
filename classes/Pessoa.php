<?php

class Pessoa {

private $nome;
private $cpf;
private $rg;
private $fone;
private $email;

public function setNome($nome){
    if( (strlen($nome) < 6 ) || (strlen($nome) > 30))
        throw new Exception("Nome invalido");
    else
        $this->nome = $nome;
}

public function getNome(){ 
    return $this->nome; 
}
    
public function setCpf($cpf){
    if (strlen($cpf) != 11 )
        throw new Exception("Cpf invalido");
    else
        $this->cpf = $cpf;
}

public function getCpf(){ 
    return $this->cpf; 
}
   
public function setRg($rg){
    if (strlen($rg) == 0 )
        throw new Exception("Rg invalido");
    else
        $this->rg = $rg;
}
    
public function getRg(){ 
    return $this->rg; 
}

public function setFone($fone)
{
    if (strlen($fone) == 0 )
        throw new Exception("Telefone invalido");
    else
        $this->fone = $fone;
}

public function getFone(){ 
    return $this->fone; 
}

public function setEmail($email)
{
    if (strlen($email) == 0 )
        throw new Exception("Email invalido");
    else
        $this->email = $email;
}

public function getEmail(){ 
    return $this->email; 
}
   
}
?>