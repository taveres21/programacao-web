<?php

namespace Php\Projeto\Controllers;

use Php\Projeto\Models\DAO\ClienteDAO;
use Php\Projeto\Models\Domain\Cliente;


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
        $cliente = new Cliente(0, $_POST['nome'],$_POST['cpf'],$_POST['ativo']);
        $clienteDAO = new ClienteDAO();
        if ($clienteDAO->inserir($cliente)) {
            $sucesso = "Inserido com sucesso!";
            header("Location: /Cliente/visualizar?sucesso=" . urlencode($sucesso));
            exit;
        } else {
            $falha = "Erro ao inserir!";
            header("Location: /Cliente/visualizar?falha=" . urlencode($falha));
            exit;
        }
    }

    public function buscar($params)
    {
        $id =$_POST['id'];
        $clienteDao = new ClienteDAO();
        $resultado = $clienteDao->consultarPorId($id);
        require_once ("../src/Views/Cliente/Index.php");

    }

    public function editar($params)
    {
        $id = $params[1];
        $ClienteDAO = new ClienteDAO();
        $resultado = $ClienteDAO->consultarPorId($id);
        require_once ("../src/Views/Cliente/Editar.php");
    }

    public function alterado($params)
    {
        $clienteDAO = new Cliente($params[1], $_POST['nome'], $_POST['ativo'], $_POST['cpf']);
        $clienteDAO = new ClienteDAO();
        if ($clienteDAO->alterar($cliente)) {
            header("Location: /Cliente/visualizar/alterar/true");
        } else {
            header("Location: /Cliente/visualizar/alterar/false");
        }
    }    
    
    public function excluir($params)
    {
        $id = $params[1];
        $ClienteDAO = new ClienteDao();
        $resultado = $ClienteDAO->consultarPorId($id);
        require_once ("../src/Views/Cliente/Excluir.php");
    }

    public function excluido($params)
    {
        $clienteDAO = new ClienteDao();
        if ($clienteDAO->excluir($params[1])) {
            header("Location: /Cliente/visualizar/excluir/true");
        } else {
            header("Location: /Cliente/visualizar/excluir/false");
        }
    }


}