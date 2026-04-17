<?php

abstract class Pokemon {
    protected $nombre;
    protected $tipo;
    protected $ps;
    protected $defensa;
    protected $ataque;

    public function __construct($nombre, $tipo, $ps, $defensa, $ataque){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->ps = $ps;
        $this->defensa = $defensa;
        $this->ataque = $ataque;
    }

    public function getNombre() { return $this->nombre; }
    public function getTipo() { return $this->tipo; }
    public function getPs() { return $this->ps; }
    public function getDefensa() { return $this->defensa; }
    public function getAtaque() { return $this->ataque; }

    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setTipo($tipo) { $this->tipo = $tipo; }
    public function setPs($ps) { $this->ps = $ps; }
    public function setDefensa($defensa) { $this->defensa = $defensa; }
    public function setAtaque($ataque) { $this->ataque = $ataque; }
    
    public function recibirAtaque($pokemon) {
        $ps -= $pokemon->getAtaque();
    }
}