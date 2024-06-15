<?php

namespace Php\Projeto\Models\DAO;


use Php\Projeto\Models\Domain\PedidoItem;

class PedidoItemDAO{

private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(PedidoItem $pedidoitem){
        try{
            $sql = "INSERT INTO pedidoitem (id_pedido, id_produto, valor) VALUES (:id_pedido, :id_produto, :valor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id_pedido", $pedidoitem->getId_Pedido());  
            $p->bindValue(":id_produto", $pedidoitem->getId_Produto());
            $p->bindValue(":valor", $pedidoitem->getValor());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(PedidoItem $pedidoitem)
    {
        try {
            $sql = "UPDATE pedidoitem SET id_pedido = :id_pedido, id_produto = :id_produto, valor = :valor
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id_pedido", $pedidoitem->getId_Pedido());
            $p->bindValue(":id_produto", $pedidoitem->getId_Produto());
            $p->bindValue(":valor", $pedidoitem->getValor());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir(int $id)
    {
        try {
            $sql = "DELETE FROM pedidoitem
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT pi.*, p.id id_pedido, pr.id as id_produto FROM pedidoitem pi INNER JOIN pedido p ON pi.id_pedido = p.id INNER JOIN produto pr ON pi.id_produto = pr.id";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id)
    {
        try {
            $sql = "SELECT * FROM pedidoitem WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

}