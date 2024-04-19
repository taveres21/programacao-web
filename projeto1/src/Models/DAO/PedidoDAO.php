<?php

namespace Php\Projeto\Models\DAO;


use Php\Projeto\Models\Domain\Pedido;


class PedidoDAO{

private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Pedido $pedido){
        try{
            $sql = "INSERT INTO pedido (id_cliente, descricao, data, horario) VALUES (:id_cliente, :descricao, :data, :horario)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id_cliente", $pedido->getId_Cliente());  
            $p->bindValue(":descricao", $pedido->getDescricao());
            $p->bindValue(":data", $pedido->getData());
            $p->bindValue(":horario", $pedido->getHorario());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT p.*, c.nome FROM pedido p INNER JOIN cliente c ON c.id = p.id_cliente";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

}