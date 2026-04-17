<?php

class Planta extends Pokemon {

    public function __construct($nombre, $tipo, $ps, $defensa, $ataque) {
        parent::__construct($nombre, $tipo, $ps, $defensa, $ataque);
    }

    public fucntion recibirAtaque($pokemon) {
        If ($tipo = "planta") {
            $ps -= $pokemon->getAatque() / 2;
        }else{ parent::recibirAtaque(); }
    }
}