<?php

require_once("../conexao/config.php");

function consultarProfessores()
{
    global $pdo;
    $sql = 
    "SELECT p.nome, p.formacao, p.telefone, p.email, a.nome aluno
    FROM professores p
    LEFT OUTER jOIN aluno a on (a.id = p.aluno_id)";
    $stm = $pdo->query($sql);
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="container">
    <h3>Hello, world!</h3>

    <?php
    if (isset($_GET['inserir'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro inserido com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } else if (isset($_GET['alterar'])) {
         ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro alterado com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }else if (isset($_GET['excluir'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro excluido com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }?>

    <a href="inserir.php" class="btn btn-info">Inserir novo Professor</a>

    <table class="table table-info table-striped table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Formação</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Aluno</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dados = consultarProfessores();
            if ($dados != null) {
                foreach ($dados as $d) { ?>
                    <tr>
                        <td><?=$d['nome']?></td>
                        <td><?=$d['formacao']?></td>
                        <td><?=$d['telefone']?></td>
                        <td><?=$d['email']?></td>
                        <td><?=$d['aluno']?></td>
                        <td>
                            <a href="alterar.php?id=<?=$d['id']?>">Alterar</a>
                            <a href="excluir.php?id=<?=$d['id']?>">Excluir</a>
                        </td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='2'>Tabela vazia!</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>