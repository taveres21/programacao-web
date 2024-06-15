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
    <title>Clientes</title>
</head>

<body>
    <a href="/">Inicio</a>
    <div class="container">
        <h1>Clientes</h1>
        <a href="/Cliente/inserir">Novo Cliente</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Ativo</th>
                    <th class="col-2 text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($c = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['nome'] ?></td>
                        <td><?= $c['cpf'] ?></td>
                        <td><?= $c['ativo'] ?></td>
                        <td>
                            <a href="/cliente/editar/<?= $c['id'] ?>" class="btn btn-warning">
                                Alterar
                            </a>
                            <a href="/cliente/excluir/<?= $c['id'] ?>" class="btn btn-danger">
                                Excluir
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>