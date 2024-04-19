<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inserir Pedido</title>
  </head>
  <body>
      <a href="/">Pedido</a>
        <h1>Inserir Pedido</h1>
        <form action="/Pedido/novo" method="post">
            <label for="id_cliente">Id Cliente:</label>
            <input type="number" name="id_cliente"  required>
            <label for="descricao" >Descrição:</label>
            <input type="text" name="descricao"  required>
            <label for="data" >Data:</label>
            <input type="date" name="data"  required>
            <label for="horario" >Horario:</label>
            <input type="time" name="horario"  required>
            <button type="submit">Salvar</button>
        </form>
    </main>
  </body>
</html>