<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inserir Cliente</title>
  </head>
  <body>
  <a href="/">Inicio</a>
    <h1>Inserir Cliente</h1>
    <form action="/Cliente/novo" method="post">
        <label for="nome" >Nome:</label>
        <input type="text" name="nome"required>
        <label for="Ativo">Ativo:</label>
        <input type="text" name="ativo"  required>
        <label for="cpf" >Cpf:</label>
        <input type="text" name="cpf"  required>
        <button type="submit" >Salvar</button>
    </form>
  </body>
</html>