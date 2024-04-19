<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\Primeiroprojeto\Router($metodo, $caminho);

#ROTAS

r->get('/', function () {
    include ("home.html");
});

$r->get('/olamundo', function () {
    return "Olá mundo!";
});

$r->get('/olapessoa/{nome}', function ($params) {
    return 'Olá ' . $params[1];
});

$r->get('/exemplo1/formulario', function () {
    include ("exemplo1.html");
});

$r->post('/exemplo1/resposta', function () {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    return "A soma é: {$soma}";
});

$r->get('/exer1/form', function () {
    include ("listaExercicios/exercicio1.html");
});

$r->post('/exercicio1/resposta', function () {
    $num = $_POST['num'];

    if ($num < 0) {
        return "Valor negativo.";
    } else if ($num == 0) {
        return "Igual a zero.";
    } else {
        return "Valor positivo";
    }

});



$r->get('/exer3/form', function () {
    include ("listaExercicios/exercicio3.html");
});

$r->post('/exer3/resposta', function () {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $resposta = $num1 + $num2;

    if ($num1 == $num2) {
        return $resposta * 3;
    } else {
        return $resposta;
    }

});

$r->get('/exer4/form', function () {
    include ("listaExercicios/exercicio4.html");
});

$r->post('/exer4/resposta', function () {
    $num = $_POST['num'];

    for ($x = 1; $x <= 10; $x++) {
        echo "<h1>" . $num . "x" . $x . " = " . ($num * $x) . "</h1>";
    }
});

$r->get('/exer5/form', function () {
    include ("listaExercicios/exercicio5.html");
});

$r->post('/exer5/resposta', function () {
    $num = $_POST['num'];
    $resposta = 1;
    if ($num == 0) {
        return $resposta;
    } else {
        for ($num; $num > 1; $num--) {
            $resposta = $resposta * $num;
        }
        return $resposta;
    };
});

$r->get('/exer6/form', function () {
    include ("listaExercicios/exercicio6.html");
});

$r->post('/exer6/resposta', function () {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];



    if ($num1 == $num2) {
        return "Números iguais a " . $num1;
    } else {
        if ($num1 > $num2) {
            return $num2 . " " . $num1;
        } else {
            return $num1 . " " . $num2;
        }
    }

});

$r->get('/exer7/form', function () {
    include ("listaExercicios/exercicio7.html");
});

$r->post('/exer7/resposta', function () {
    $num = $_POST['num'];
    if ($num <= 0) {
        return "Insíra um valor válido.";
    } else {
        return $num * 100;
    };
});

$r->get('/exer8/form', function () {
    include ("listaExercicios/exercicio8.html");
});

$r->post('/exer8/resposta', function () {
    $parede = $_POST['num'];
    if ($tamParede <= 0) {
        return "Insíra um valor válido.";
    } else {
        $litros = $parede / 3;
        $latas = $litros / 18;
        $preco = $latas * 80.00;
        return "Precisará de " . $latas . " lata(s), sendo igual  R$" . $preco. " reais.";
    };
});


$r->get('/exer9/form', function () {
    include ("listaExercicios/exercicio9.html");
});

$r->post('/exer9/resposta', function () {
    $anoNasc = $_POST['num'];

    $resposta1 = date('Y') - $anoNasc ;
    $resposta2 = $resposta1 * 365;
    $resposta3 = 2025 - $anoNasc; 

    echo "A)  ". $resposta1. " <br>
          B)  ". $resposta2. " <br>
          C)  ". $resposta3. " ";
});


$r->get('/exer10/form', function () {
    include ("listaExercicios/exercicio10.html");
});

$r->post('/exer10/resposta', function () {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura) ** 2;

    if ($imc < 18.5) {
       return "Imc é " . $imc . " magreza";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Imc é " . $imc . " normal";
    } elseif ($imc >= 25.0 && $imc <= 29.9) {
        return "Imc é " . $imc . ", obesidade grau I";
    } elseif ($imc >= 30.0 && $imc <= 39.9) {
        return "Imc é " . $imc . ",  obesidade grau II";
    } elseif ($imc >= 40.0) {
        return "Imc é " . $imc . ", obesidade grau III";
    }
});




#ROTAS

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

echo $resultado($r->getParams());


