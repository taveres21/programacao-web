<?php

namespace Php\Projeto\Controllers;

use Php\Projeto\Models\DAO\ProdutoDAO;
use Php\Projeto\Models\Domain\Produto;



class ProdutoController
{
    public function index($params)
    {
        $produtoDao = new ProdutoDAO();
        $resultado = $produtoDao->consultar();
        require_once ("../src/Views/Produto/Index.php");
    }

    public function inserir($params)
    {
        require_once ("../src/Views/produto/Adicionar.php");
    }


    public function novo($params)
    {
        $produto = new Produto(0, $_POST['descricao'], $_POST['peso'],$_POST['situacao'], 0);
        $produtoDAO = new ProdutoDAO();
        if ($produtoDAO->inserir($Produto)) {
            $sucesso = "Inserido com sucesso!";
            header("Location: /produto/visualizar?sucesso=" . urlencode($sucesso));
            exit;
        } else {
            $falha = "Erro ao inserir!";
            header("Location: /produto/visualizar?falha=" . urlencode($falha));
            exit;
        }
    }

}