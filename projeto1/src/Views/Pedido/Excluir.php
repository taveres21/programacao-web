<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Excluir Pedido</title>
</head>

<body>
    <a class="btn btn-secondary mt-3 ms-3" href="/">Inicio</a>
    <main class="container">
        <h1>Excluir Pedido</h1>
        <form action="/Pedido/excluido/<?= $resultado['id'] ?>" method="post">
            <div class="row">
                <div class="col-6">
                    <label for="id_cliente" class="form-label">Cliente:</label>
                    <input type="text"disabled value="<?= $resultado['id_cliente'] ?>" name="id_cliente" class="form-control" required>
                </div>
                <div class="col-6">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input type="text" disabled value="<?= $resultado['descricao'] ?>" name="descricao" class="form-control" required>
                </div>
                <div class="col-6">
                    <label for="data" class="form-label">Data:</label>
                    <input type="date" disabled value="<?= $resultado['data'] ?>" name="data" class="form-control"
                        required>
                </div>
                <div class="col-6">
                    <label for="horario" class="form-label">Horario:</label>
                    <input type="time" value="<?= $resultado['horario'] ?>" name="horario" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mt-4">Tem certeza que deseja excluir esse Pedido?</p>
                    <button type="submit" class="btn btn-danger ">Excluir</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>