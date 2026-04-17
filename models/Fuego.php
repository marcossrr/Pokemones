<?php

class Fuego extends Pokemon {

    public function __construct($nombre, $tipo, $ps, $defensa, $ataque) {
        parent::__construct($nombre, $tipo, $ps, $defensa, $ataque);
    }

    public fucntion recibirAtaque($pokemon) {
        If ($tipo = "fuego") {
            $pokemon->setPs($pokemon->getPs() - $this->ataque + $pokemon->getDefensa());
        }else{ parent::recibirAtaque(); }
    }
}