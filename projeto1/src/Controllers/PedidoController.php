<?php

namespace Php\Projeto\Controllers;

use Php\Projeto\Models\DAO\PedidoDAO;
use Php\Projeto\Models\Domain\Pedido;

class PedidoController
{
    public function index($params)
    {
        $pedidoDao = new PedidoDAO();
        $resultado = $pedidoDao->consultar();
        require_once ("../src/Views/Pedido/Index.php");
    }

    public function inserir($params)
    {
        require_once ("../src/Views/Pedido/Adicionar.php");
    }

    public function novo($params)
    {
        $pedido = new Pedido(0, $_POST['id_cliente'], $_POST['descricao'],$_POST['data'], $_POST['horario']);
        $pedidoDAO = new PedidoDAO();
        if ($pedidoDAO->inserir($pedido)) {
            $sucesso = "Inserido com sucesso!";
            header("Location: /Pedido/visualizar?sucesso=" . urlencode($sucesso));
            exit;
        } else {
            $falha = "Erro ao inserir!";
            header("Location: /Pedido/visualizar?falha=" . urlencode($falha));
            exit;
        }
    }

    public function buscar($params)
    {
        $id =$_POST['id'];
        $pedidoDAO = new PedidoDao();
        $resultado = $pedidoDAO->consultarPorId($id);
        require_once ("../src/Views/Pedido/Index.php");

    }

    public function editar($params)
    {
        $id = $params[1];
        $pedidoDAO = new PedidoDAO();
        $resultado = $pedidoDAO->consultarPorId($id);
        require_once ("../src/Views/Pedido/Editar.php");
    }

    public function alterado($params)
    {
        $pedido = new Pedido($params[1], $_POST['descricao'], $_POST['data'], $_POST['horario']);
        $pedidoDAO = new PedidoDAO();
        if ($pedidoDAO->alterar($pedido)) {
            header("Location: /Pedido/visualizar/alterar/true");
        } else {
            header("Location: /Pedido/visualizar/alterar/false");
        }
    }

    public function excluir($params)
    {
        $id = $params[1];
        $pedidoDAO = new PedidoDAO();
        $resultado = $pedidoDAO->consultarPorId($id);
        require_once ("../src/Views/Pedido/Excluir.php");
    }

    public function excluido($params)
    {
        $pedidoDAO = new PedidoDAO();
        if ($pedidoDAO->excluir($params[1])) {
            header("Location: /pedido/visualizar/excluir/true");
        } else {
            header("Location: /pedido/visualizar/excluir/false");
        }
    }



}