<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inserir Pedido</title>
  </head>
  <body>
  <a class="btn btn-secondary mt-3 ms-3" href="/">Inicio</a>
  <main class="container">
        <h1>Inserir Pedido</h1>
        <form action="/Pedido/novo" method="post">
            <label for="id_cliente" class="form-label">Id Cliente:</label>
            <input type="number" name="id_cliente"  class="form-control"  required>
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" name="descricao" class="form-control"  required>
            <label for="data" class="form-label">Data:</label>
            <input type="date" name="data" class="form-control"  required>
            <label for="horario" class="form-label">Horario:</label>
            <input type="time" name="horario"  class="form-control" required>
            
            <div class="row">
            <div class="col">
                <button type="submit" class="mt-4 btn btn-primary ">Salvar</button>
            </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>