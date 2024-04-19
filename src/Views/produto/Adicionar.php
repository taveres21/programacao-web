<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inserir Produto</title>
  </head>
  <body>
  <a href="/">Produto</a>
    <h1>Inserir Produto</h1>
    <form action="/Produto/novo" method="post">
        <label for="nome" >Descrição:</label>
        <input type="text" name="nome"required>
        <label for="peso" >Peso:</label>
        <input type="text" name="peso"required>

        <label for="situacao" >Situacao:</label>
        <input type="text" name="situacao" required>
        <button type="submit" >Salvar</button>
    </form>
    </main>
  </body>
</html>