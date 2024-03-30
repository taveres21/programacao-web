<?php

class Aluno {

    function __construct($nome,$idade) {
        $this->setNome($nome);
        $this->setIdade($idade);
    }

    protected $nome;
    private $idade;

    function getNome() {
        return $this->nome;    
    }
    function getIdade() {
        return $this->idade;
    }
    function setIdade($idade) {
        if (($idade > 0) && ($idade < 123)) {
            $this->idade = $idade;
        }
        else {
            $this->idade = 0;
        }
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    final function mostrarNomeIdade() {
        return "Meu nome é {$this->nome} minha idade é {$this->getIdade()}";
    }
}

?>