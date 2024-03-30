<?php

  require_once("../conexao/config.php");

  function excluirProfessor($id){
    global $pdo;
    $sql = "DELETE FROM professores WHERE id = :id";
    $stm = $pdo->prepare($sql);
    $stm->bindParam(":id", $id);
    $stm->execute();
    header("Location: index.php?excluir=ok");
    exit();
  }

  function consultarPorId($id) {
    global $pdo;
    $sql = "SELECT * FROM professores WHERE id = :id";
    $stm = $pdo->prepare($sql);
    $stm->bindParam(":id", $id);
    $stm->execute();
    return $stm->fetch(PDO::FETCH_ASSOC);
  }

  if($_POST){
    if(isset($_POST['id'])){
      excluirProfessor($_POST['id']);
    }
  }else if (isset($_GET['id'])) {
    $aluno = consultarPorId($_GET['id']);
  } else {
    header('Location: index.php');
  }

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="container">
    <h3>Excluir Professor</h3>
    <form action="excluir.php" method="POST">
      <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
      <div class="row">
        <div class="col-7">
          <label for="nome" class="form-label">Informe o nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" value="<?=$aluno['nome']?>" disabled/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe o curso:</label>
          <input type="text" id="curso" name="curso" class="form-control" value="<?=$aluno['curso']?>" disabled/>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="btn btn-danger" type="submit">Excluir Dados</button>
        </div>
      </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>