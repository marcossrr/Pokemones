<?php

class GestorPDO extends Connection{

    public function __construct() {
        parent::__construct();
    }

    public function listar() {
        $consulta="SELECT * FROM pokemon";
        $rtdo=$this->conn->query($consulta);
        $arrayPokemon=[];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)){
            $pokemon = new Pokemon($value['nombre'], $value['tipo'], $value['ps'], $value['defensa'], $value['ataque'], $value['id']);
            $arrayPokemon[]=$pokemon;
        }
        return $arrayPokemon;
    }
}