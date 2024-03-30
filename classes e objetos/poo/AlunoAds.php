<?php


    require('Aluno.php');


    final class AlunoAds extends Aluno {
        private $software;


        function infoAluno() {
            return "<Br>Olá, meu nome é {$this->nome} sou do ADS!";
        }

        function setSoftware($software) {
            $this->software = $software;
        }
        function getSoftware() {
            return $this->software;
        }
    }



?>