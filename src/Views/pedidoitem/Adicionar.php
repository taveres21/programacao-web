<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inserir Item do Pedido</title>
  </head>
  <body>
      <a href="/">Inicio</a>
        <h1>Inserir Item do Pedido</h1>
        <form action="/pedidoitem/novo" method="post">
            <label for="id_pedido" class="form-label">Id Pedido:</label>
            <input type="number" name="id_pedido" class="form-control" required>
            <label for="id_produto" class="form-label">Id Produto:</label>
            <input type="number" name="id_produto" class="form-control" required>
            <label for="Valor" class="form-label">Valor:</label>
            <input type="text" name="Valor" class="form-control" required>
            <button type="submit" class="mt-4 btn btn-primary ">Salvar</button>
        </form>
    </main>
  </body>
</html>