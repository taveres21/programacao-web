<?php

require __DIR__ ."/vendor/autoload.php";


$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\Projeto\Router($metodo, $caminho);


$r->get('/', 'Php\Projeto\Controllers\HomeController@index');


$r->get('/Cliente/inserir',
    'Php\Projeto\Controllers\ClienteController@inserir');

$r->post('/Cliente/novo',
    'Php\Projeto\Controllers\ClienteController@novo');

$r->get('/Cliente/visualizar',
    'Php\Projeto\Controllers\ClienteController@index');

$r->get('/Cliente/editar/{id}',
    'Php\Projeto\Controllers\ClienteController@editar');

$r->post('/Cliente/alterado/{id}',
    'Php\Projeto\Controllers\ClienteController@alterado');

$r->get('/Cliente/excluir/{id}',
    'Php\Projeto\Controllers\ClienteController@excluir');

$r->post('/Cliente/excluido/{id}',
    'Php\Projeto\Controllers\ClienteController@excluido');

$r->post('/Cliente/buscar',
    'Php\Projeto\Controllers\ClienteController@buscar');

$r->get('/Cliente/visualizar/{acao}/{status}', 
    'Php\Projeto\Controllers\ClienteController@index');


$r->get('/Pedido/inserir',
    'Php\Projeto\Controllers\PedidoController@inserir');

$r->post('/Pedido/novo',
    'Php\Projeto\Controllers\PedidoController@novo');

$r->get('/Pedido/visualizar',
    'Php\Projeto\Controllers\PedidoController@index');

$r->get('/Pedido/editar/{id}',
    'Php\Projeto\Controllers\PedidoController@editar');

$r->post('/Pedido/alterado/{id}',
    'Php\Projeto\Controllers\PedidoController@alterado');

$r->get('/Pedido/excluir/{id}',
    'Php\Projeto\Controllers\PedidoController@excluir');

$r->post('/Pedido/excluido/{id}',
    'Php\Projeto\Controllers\PedidoController@excluido');

$r->post('/Pedido/buscar',
    'Php\Projeto\Controllers\PedidoController@buscar');

$r->get('/Pedido/visualizar/{acao}/{status}', 
    'Php\Projeto\Controllers\PedidoController@index');


$r->get('/PedidoItem/inserir',
    'Php\Projeto\Controllers\PedidoItemController@inserir');

$r->post('/PedidoItem/novo',
    'Php\Projeto\Controllers\PedidoItemController@novo');

$r->get('/PedidoItem/visualizar',
    'Php\Projeto\Controllers\PedidoItemController@index');

$r->get('/PedidoItem/editar/{id}',
    'Php\Projeto\Controllers\PedidoItemController@editar');

$r->post('/PedidoItem/alterado/{id}',
    'Php\Projeto\Controllers\PedidoItemController@alterado');

$r->get('/PedidoItem/excluir/{id}',
    'Php\Projeto\Controllers\PedidoItemController@excluir');

$r->post('/PedidoItem/excluido/{id}',
    'Php\Projeto\Controllers\PedidoItemController@excluido');

$r->post('/PedidoItem/buscar',
    'Php\Projeto\Controllers\PedidoItemController@buscar');

$r->get('/PedidoItem/visualizar/{acao}/{status}', 
    'Php\Projeto\Controllers\PedidoItemController@index');


$r->get('/Produto/inserir',
    'Php\Projeto\Controllers\ProdutoController@inserir');

$r->post('/Produto/novo',
    'Php\Projeto\Controllers\ProdutoController@novo');

$r->get('/Produto/visualizar',
    'Php\Projeto\Controllers\ProdutoController@index');

$r->get('/Produto/editar/{id}',
    'Php\Projeto\Controllers\ProdutoController@editar');

$r->post('/Produto/alterado/{id}',
    'Php\Projeto\Controllers\ProdutoController@alterado');

$r->get('/Produto/excluir/{id}',
    'Php\Projeto\Controllers\ProdutoController@excluir');

$r->post('/Produto/excluido/{id}',
    'Php\Projeto\Controllers\ProdutoController@excluido');

$r->post('/Produto/buscar',
    'Php\Projeto\Controllers\ProdutoController@buscar');

$r->get('/Produto/visualizar/{acao}/{status}', 
    'Php\Projeto\Controllers\ProdutoController@index');


$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure){
    echo $resultado($r->getParams());
} elseif (is_string($resultado)){
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($r->getParams());
}

