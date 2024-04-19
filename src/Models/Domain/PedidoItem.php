<?php

namespace Php\Projeto\Models\Domain;

class PedidoItem{

    private $id;
    private $id_pedido;
    private $id_produto;
    private $valor;

    public function __construct($id, $id_pedido, $id_produto, $valor){
        $this->setId($id);
        $this->setId_pedido($id_pedido);
        $this->setId_produto($id_produto);
        $this->setValor($Valor);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId_pedido(){
        return $this->id_pedido;
    }

    public function setId_pedido($id_pedido){
        $this->id_pedido = $id_pedido;
    }
    public function getId_produto(){
        return $this->id_produto;
    }

    public function setId_produto($id_produto){
        $this->id_produto = $id_produto;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

}   