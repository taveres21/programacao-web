<?php

namespace Php\ProjetoBanco\Models\Domain;

class Pedido{

    private $id;
    private $id_cliente;
    private $descricao;
    private $data;
    private $horario;

    public function __construct($id, $id_cliente, $descricao, $data, $horario){
        $this->setId($id);
        $this->setId_Cliente($id_cliente);
        $this->setDescricao($descricao);
        $this->setData($data);
        $this->setHorario($horario);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId_Cliente(){
        return $this->id;
    }

    public function setId_Cliente($id){
        $this->id_cliente = $id_cliente;
    }

    public function getDescricao(){
        return $this->desricao;
    }

    public function setNome($descricao){
        $this->descricao = $descricao;
    }
    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }
    public function getHorario(){
        return $this->horario;
    }

    public function setHorario($Horario){
        $this->horario= $horario;
    }

}   