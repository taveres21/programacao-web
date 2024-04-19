<?php

namespace Php\Projeto\Models\Domain;

class Produto{

    private $id;
    private $descricao;
    private $peso;
    private $situacao;

    public function __construct($id, $descricao, $peso, $situacao){
        $this->setId($id);
        $this->setDescricao($descricao);
        $this->setPeso($peso);
        $this->setSituacao($situacao);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getPeso(){
        return $this->Peso;
    }

    public function setPeso($Peso){
        $this->peso = $peso;
    }
    public function getSituacao(){
        return $this->situacao;
    }

    public function setSituacao($situacao){
        $this->situacao = $situacao;
    }

}   