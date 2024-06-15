<?php
// require '../src/Views/cabecalho.php';

if (isset($_GET['sucesso'])) {
    echo "<p>" . $_GET['sucesso'] . "</p>";
} elseif (isset($_GET['falha'])) {
    echo "<p>" . $_GET['falha'] . "</p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Itens do Pedido</title>
</head>

<body>
<a class="btn btn-secondary mt-3 ms-3" href="/">Inicio</a>
    <div class="container">
        <h1>Itens do Pedido</h1>
        <div>
        <div class="d-flex justify-content-begin">
            <a href="/Pedido/inserir" class="d-flex text-center btn-lg btn btn-primary">Novo Item no Pedido</a>
        </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">id_pedido</th>
                    <th scope="col">id_produto</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($c = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['id_pedido'] ?></td>
                        <td><?= $c['id_produto'] ?></td>
                        <td><?= $c['valor'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var table = new DataTable('#tabela', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.6/i18n/pt-BR.json',
            },
        });
    </script>
</body>

</html>