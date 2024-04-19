<?php

namespace Php\ProjetoBanco\Models\Domain;

class Cliente{

    private $id;
    private $nome;
    private $cpf;
    private $ativo;

    public function __construct($id, $nome, $cpf, $ativo){
        $this->setId($id);
        $this->setNome($nome);
        $this->setAtivo($ativo);
        $this->setCpf($cpf);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->idade = $ativo;
    }
    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

}   