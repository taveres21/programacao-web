<?php

namespace Php\ProjetoBanco\Controllers;

use Php\ProjetoBanco\Models\DAO\ClienteDAO;
use Php\ProjetoBanco\Models\Domain\Cliente;


class ClienteController
{
    public function index($params)
    {
        $clienteDao = new ClienteDAO();
        $resultado = $clienteDao->consultar();
        require_once ("../src/Views/Cliente/Index.php");
    }

    public function inserir($params)
    {
        require_once ("../src/Views/Cliente/Adicionar.php");
    }

    public function novo($params)
    {
        $cliente = new Cliente(0, $_POST['nome'], $_POST['ativo'], $_POST['cpf']);
        $clienteDAO = new ClienteDAO();
        if ($clienteDAO->inserir($cliente)) {
            $sucesso = "Inserido com sucesso!";
            header("Location: /cliente/visualizar?sucesso=" . urlencode($sucesso));
            exit;
        } else {
            $falha = "Erro ao inserir!";
            header("Location: /cliente/visualizar?falha=" . urlencode($falha));
            exit;
        }
    }

}