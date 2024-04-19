<?php

    class Ponto {
        private int $x,$y;
        static int $contador = 0;

        function __construct($vx,$vy) {
            $this->setX($vx);
            $this->setY($vy);
            self::$contador++;
        }

        static function getContador() {
            return self::$contador;
        }

        public function calcularDistanciaA(Ponto $p) {
            $x = pow($p->getX() - $this->x,2);
            $y = pow($p->getY() - $this->y,2);
            $delta = sqrt($x + $y);
            return $delta;
        }

        public function calcularDistanciaB($x, $y, $x2, $y2) {  // Para calcular a distância B basta passar o próprio valor
            $x = pow($x - $x2,2);
            $y = pow($y - $y2,2);
            $delta = sqrt($x+$y);
            return $delta;
        }
        
        function setX($valor) {
            $this->x = $valor;
        }
        function getX() {
            return $this->x;
        }
        function setY($valor) {
            $this->y = $valor;
        }
        function getY() {
            return $this->y;
        }

        function deslocar($dx,$dy) {
            $this->x = $dx;
            $this->y = $dy;
        }

        function toString() {
            echo "Classe Ponto: x {$this->x} y {$this->y}";
        }
        
    }



?>