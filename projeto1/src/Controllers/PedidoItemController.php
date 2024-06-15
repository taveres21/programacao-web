<?php

namespace Php\Projeto\Controllers;

use Php\Projeto\Models\DAO\PedidoItemDAO;
use Php\Projeto\Models\Domain\PedidoItem;



class PedidoItemController
{
    public function index($params)
    {
        $pedidoItemDao = new PedidoItemDAO();
        $resultado = $pedidoItemDao->consultar();
        require_once ("../src/Views/PedidoItem/Index.php");
    }

    public function inserir($params)
    {
        require_once ("../src/Views/PedidoItem/Adicionar.php");
    }

    public function novo($params)
    {
        $pedidoItem = new PedidoItem(0, $_POST['id_pedido'], $_POST['id_produto'],$_POST['valor']);
        $pedidoItemDAO = new PedidoItemDAO();
        if ($pedidoItemDAO->inserir($pedidoItem)) {
            $sucesso = "Inserido com sucesso!";
            header("Location: /PedidoItem/visualizar?sucesso=" . urlencode($sucesso));
            exit;
        } else {
            $falha = "Erro ao inserir!";
            header("Location: /PedidoItem/visualizar?falha=" . urlencode($falha));
            exit;
        }
    }

    public function buscar($params)
    {
        $id =$_POST['id'];
        $pedidoItemDAO = new PedidoItemDAO();
        $resultado = $pedidoItemDAO->consultarPorId($id);
        require_once ("../src/Views/PedidoItem/Index.php");

    }

    public function editar($params)
    {
        $id = $params[1];
        $AlunoDAO = new AlunoDAO();
        $resultado = $AlunoDAO->consultarPorId($id);
        require_once ("../src/Views/Aluno/Editar.php");
    }

    public function alterado($params)
    {
        $pedidoItem = new PedidoItem($params[1], $_POST['id_pedido'], $_POST['id_produto'], $_POST['valor']);
        $pedidoItemDAO = new PedidoItemDAO();
        if ($pedidoItemDAO->alterar($pedidoItem)) {
            header("Location: /pedidoitem/visualizar/alterar/true");
        } else {
            header("Location: /pedidoitem/visualizar/alterar/false");
        }
    }

    public function excluir($params)
    {
        $id = $params[1];
        $pedidoItemDAO = new PedidoItemDAO();
        $resultado = $pedidoItemDAO->consultarPorId($id);
        require_once ("../src/Views/PedidoItem/Excluir.php");
    }

    public function excluido($params)
    {
        $pedidoItemDAO = new PedidoItemDAO();
        if ($alunoDAO->excluir($params[1])) {
            header("Location: /pedidoitem/visualizar/excluir/true");
        } else {
            header("Location: /pedidoitem/visualizar/excluir/false");
        }
    }




}