<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inserir Item do Pedido</title>
  </head>
  <body>
  <a class="btn btn-secondary mt-3 ms-3" href="/">Inicio</a>
  <main class="container">
        <h1>Inserir Item do Pedido</h1>
        <form action="/PedidoItem/novo" method="post">
            <label for="id_pedido" >Id Pedido:</label>
            <input type="number" name="id_pedido"  required>
            <label for="id_produto" >Id Produto:</label>
            <input type="number" name="id_produto" required>
            <label for="Valor">Valor:</label>
            <input type="text" name="Valor" required>
            <button type="submit">Salvar</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>