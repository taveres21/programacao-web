<?php

    // require('Aluno.php');
    require('AlunoAds.php');



    // $a = New Aluno($_POST['nome'],$_POST['idade']);
    $b = New AlunoAds($_POST['nome'],$_POST['idade']);

    echo "A idade do aluno {$b->getNome()} é {$b->getIdade()}";
    echo "{$b->infoAluno()}";
?>