<?php

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
    <title>Pedido</title>
</head>

<body>
<a  href="/">Inicio</a>
    <div class="container">
        <h1>Pedido</h1>
        <a href="/Pedido/inserir">Novo Pedido</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cód. Cliente</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horário</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($c = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['id_cliente'] ?></td>
                        <td><?= $c['nome_cliente'] ?></td>
                        <td><?= $c['descricao'] ?></td>
                        <td><?= $c['data'] ?></td>       
                        <td><?= $c['horario'] ?></td>              
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>