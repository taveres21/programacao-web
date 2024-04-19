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

}