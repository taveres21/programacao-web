<?php

require __DIR__ ."/vendor/autoload.php";


$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\ProjetoBanco\Router($metodo, $caminho);


$r->get('/', 'Php\ProjetoBanco\Controllers\HomeController@index');


$r->get('/Cliente/inserir',
    'Php\ProjetoBanco\Controllers\ClienteController@inserir');

$r->post('/Cliente/novo',
    'Php\ProjetoBanco\Controllers\ClienteController@novo');

$r->get('/Cliente/visualizar',
    'Php\ProjetoBanco\Controllers\ClienteController@index');

$r->get('/Pedido/inserir',
    'Php\ProjetoBanco\Controllers\PedidoController@inserir');

$r->post('/Pedido/novo',
    'Php\ProjetoBanco\Controllers\PedidoController@novo');

$r->get('/Pedido/visualizar',
    'Php\ProjetoBanco\Controllers\PedidoController@index');


$r->get('/PedidoItem/inserir',
    'Php\ProjetoBanco\Controllers\PedidoItemController@inserir');

$r->post('/PedidoItem/novo',
    'Php\ProjetoBanco\Controllers\PedidoItemController@novo');

$r->get('/PedidoItem/visualizar',
    'Php\ProjetoBanco\Controllers\PedidoItemController@index');


$r->get('/Produto/inserir',
    'Php\ProjetoBanco\Controllers\ProdutoController@inserir');

$r->post('/Produto/novo',
    'Php\ProjetoBanco\Controllers\ProdutoController@novo');

$r->get('/Produto/visualizar',
    'Php\ProjetoBanco\Controllers\ProdutoController@index');


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

