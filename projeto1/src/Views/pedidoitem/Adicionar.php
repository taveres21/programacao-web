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
            <label for="id_pedido" >Id Pedido:</label>
            <input type="number" name="id_pedido"  required>
            <label for="id_produto" >Id Produto:</label>
            <input type="number" name="id_produto" required>
            <label for="Valor">Valor:</label>
            <input type="text" name="Valor" required>
            <button type="submit">Salvar</button>
        </form>
    </main>
  </body>
</html>