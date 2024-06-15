<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alterar Pedido</title>
  </head>
  <body>
      <a class="btn btn-secondary mt-3 ms-3" href="/">Inicio</a>
      <main class="container">
        <h1>Alterar Pedido</h1>
        <form action="/Pedido/alterado/<?= $resultado['id'] ?>" method="post">
            <div class="row">
                <div class="col-6">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" value="<?= $resultado['nome'] ?>" name="nome" class="form-control" required>
                </div>
                <div class="col-6">
                    <label for="sala" class="form-label">Sala:</label>
                    <input type="text" value="<?= $resultado['sala'] ?>" name="sala" class="form-control" required>
                </div>
                <div class="col-6">
                    <label for="horario" class="form-label">Horario:</label>
                    <input type="time" value="<?= $resultado['horario'] ?>" name="horario" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="mt-4 btn btn-warning ">Alterar</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>