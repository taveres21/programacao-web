<?php

namespace Php\ProjetoBanco\Controllers;

use Php\ProjetoBanco\Models\DAO\PedidoDAO;
use Php\ProjetoBanco\Models\Domain\Pedido;

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

}