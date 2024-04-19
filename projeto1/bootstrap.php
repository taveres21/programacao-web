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

$r->get('/Pedido/inserir',
    'Php\Projeto\Controllers\PedidoController@inserir');

$r->post('/Pedido/novo',
    'Php\Projeto\Controllers\PedidoController@novo');

$r->get('/Pedido/visualizar',
    'Php\Projeto\Controllers\PedidoController@index');


$r->get('/PedidoItem/inserir',
    'Php\Projeto\Controllers\PedidoItemController@inserir');

$r->post('/PedidoItem/novo',
    'Php\Projeto\Controllers\PedidoItemController@novo');

$r->get('/PedidoItem/visualizar',
    'Php\Projeto\Controllers\PedidoItemController@index');


$r->get('/Produto/inserir',
    'Php\Projeto\Controllers\ProdutoController@inserir');

$r->post('/Produto/novo',
    'Php\Projeto\Controllers\ProdutoController@novo');

$r->get('/Produto/visualizar',
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

