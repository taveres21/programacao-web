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
        require_once ("../src/Views/Produto/Adicionar.php");
    }


    public function novo($params)
    {
        $produto = new Produto(0, $_POST['descricao'], $_POST['peso'],$_POST['situacao']);
        $produtoDAO = new ProdutoDAO();
        if ($produtoDAO->inserir($produto)) {
            $sucesso = "Inserido com sucesso!";
            header("Location: /Produto/visualizar?sucesso=" . urlencode($sucesso));
            exit;
        } else {
            $falha = "Erro ao inserir!";
            header("Location: /Produto/visualizar?falha=" . urlencode($falha));
            exit;
        }
    }

    public function buscar($params)
    {
        $id =$_POST['id'];
        $produtoDAO = new ProdutoDAO();
        $resultado = $produtoDAO->consultarPorId($id);
        require_once ("../src/Views/Produto/Index.php");

    }

    public function editar($params)
    {
        $id = $params[1];
        $produtoDAO = new ProdutoDAO();
        $resultado = $produtoDAO->consultarPorId($id);
        require_once ("../src/Views/Produto/Editar.php");
    }

    public function alterado($params)
    {
        $produto = new Produto($params[1], $_POST['descricao'], $_POST['peso'], $_POST['situacao']);
        $produtoDAO = new ProdutoDAO();
        if ($produtoDAO->alterar($produto)) {
            header("Location: /produto/visualizar/alterar/true");
        } else {
            header("Location: /produto/visualizar/alterar/false");
        }
    }

    public function excluir($params)
    {
        $id = $params[1];
        $produtoDAO = new ProdutoDAO();
        $resultado = $produtoDAO->consultarPorId($id);
        require_once ("../src/Views/Produto/Excluir.php");
    }

    public function excluido($params)
    {
        $produtoDAO = new ProdutoDAO();
        if ($produtoDAO->excluir($params[1])) {
            header("Location: /produto/visualizar/excluir/true");
        } else {
            header("Location: /produto/visualizar/excluir/false");
        }
    }



}