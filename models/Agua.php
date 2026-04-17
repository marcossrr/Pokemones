<?php

class Agua extends Pokemon {

    public function __construct($nombre, $tipo, $ps, $defensa, $ataque) {
        parent::__construct($nombre, $tipo, $ps, $defensa, $ataque);
    }

    public fucntion recibirAtaque($pokemon) {
        If ($tipo = "agua") {
            $ps -= ($pokemon->getAtaque() - $defensa);
        }else{ parent::recibirAtaque(); }
    }
}