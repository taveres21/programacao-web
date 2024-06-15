<?php

namespace Php\Projeto\Models\DAO;


use Php\Projeto\Models\Domain\Cliente;

class ClienteDAO{

private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }


    public function inserir(Cliente $cliente){
        try{
            $sql = "INSERT INTO cliente (nome, ativo, cpf) VALUES (:nome, :ativo, :cpf)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $cliente->getNome());  
            $p->bindValue(":ativo", $cliente->getAtivo());  
            $p->bindValue(":cpf", $cliente->getCpf());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(Cliente $cliente)
    {
        try {
            $sql = "UPDATE cliente SET nome = :nome, ativo = :ativo, cpf = :cpf
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $cliente->getId());
            $p->bindValue(":nome", $cliente->getNome());
            $p->bindValue(":ativo", $cliente->getAtivo());
            $p->bindValue(":cpf", $cliente->getCpf());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir(int $id)
    {
        try {
            $sql = "DELETE FROM cliente
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
            $sql = "SELECT * FROM cliente";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id)
    {
        try {
            $sql = "SELECT * FROM cliente WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }
    
}