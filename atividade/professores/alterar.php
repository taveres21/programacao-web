<?php

  require_once("../conexao/config.php");

  function alterarProfessor($id, $nome, $formacao, $telefone, $email, $aluno_id){
    global $pdo;
    $sql = "UPDATE professores 
    set nome = :nome, formacao = :formacao, telefone = :telefone, email = :email, aluno_id = :aluno_id
    WHERE id = :id";
    $stm = $pdo->prepare($sql);
    $stm->bindParam(":nome", $nome);
    $stm->bindParam(":formacao", $formacao);
    $stm->bindParam(":telefone", $telefone);
    $stm->bindParam(":email", $email);
    $stm->bindParam(":aluno_id", $aluno_id);
    $stm->execute();
    header("Location: index.php?alterar=ok");
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
    if( 
    isset($_POST['nome']) && isset($_POST['formacao'])
    && isset($_POST['telefone']) && isset($_POST['email'])
    && isset($_POST['aluno_id']) && isset($_POST['id'])){
      alterarProfessor($_POST['id'], $_POST['nome'], $_POST['formacao'], $_POST['telefone'],
      $_POST['email'],$_POST['aluno_id'],$_POST['id']);
    }
  }else if (isset($_GET['id'])) {
    $professor = consultarPorId($_GET['id']);
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
    <h3>Alterar Aluno</h3>
    <form action="alterar.php" method="POST">
      <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
      <div class="row">
        <div class="col-7">
          <label for="nome" class="form-label">Informe o nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" value="<?=$aluno['nome']?>" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe o formacao:</label>
          <input type="text" id="formacao" name="formacao" class="form-control" value="<?=$aluno['formacao']?>" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe o telefone:</label>
          <input type="text" id="telefone" name="telefone" class="form-control" value="<?=$aluno['telefone']?>" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe o email:</label>
          <input type="text" id="email" name="email" class="form-control" value="<?=$aluno['email']?>" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe o Aluno:</label>
          <input type="text" id="aluno_id" name="aluno_id" class="form-control" value="<?=$aluno['aluno_id']?>" required/>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="btn btn-primary" type="submit">Salvar Dados</button>
        </div>
      </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>