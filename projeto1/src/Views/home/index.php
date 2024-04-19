<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container mt-4">
        <h1>Projeto</h1>
        <div class="mt-5 row-gap-5 d-flex justify-content-between flex-wrap border border-success p-5">
            <div class="col-6 container">
                <h2>Cliente</h2>
                <a href="/cliente/visualizar" class="btn btn-primary ">Visualizar</a>
                <a href="/cliente/inserir" class="btn btn-success ">Adicionar</a>
            </div>
            <div class="col-6 container">
                <h2>Produto</h2>
                <a href="/produto/visualizar" class="btn btn-primary ">Visualizar</a>
                <a href="/produto/inserir" class="btn btn-success ">Adicionar</a>
            </div>
            <div class="col-6 container">
                <h2>Pedido</h2>
                <a href="/Pedido/visualizar" class="btn btn-primary ">Visualizar</a>
                <a href="/Pedido/inserir" class="btn btn-success ">Adicionar</a>
            </div>
            <div class="col-6 container">
                <h2>Itens do Pedido</h2>
                <a href="PedidoItem/visualizar" class="btn btn-primary ">Visualizar</a>
                <a href="PedidoItem/inserir" class="btn btn-success ">Adicionar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>