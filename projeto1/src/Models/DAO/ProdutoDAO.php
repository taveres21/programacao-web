<?php

namespace Php\Projeto\Models\DAO;


use Php\Projeto\Models\Domain\Produto;

class ProdutoDAO{

private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Produto $produto){
        try{
            $sql = "INSERT INTO produto (descricao, peso, situacao) VALUES (:descricao, :peso, :situacao)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":descricao", $produto->getDescricao());  
            $p->bindValue(":peso", $produto->getPeso());
            $p->bindValue(":situacao", $produto->getSituacao());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produto";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

}