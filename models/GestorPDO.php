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

    public function buscarPorId() {
        $consulta="SELECT * FROM pokemon id=$id";
        $rtdo=$this->conn->query($consulta);
    }

        public function actualizar($producto) {

    $sql="UPDATE pokemon SET nombre=:nombre, tipo=:tipo, ps=:ps, defensa:=defensa, ataque=:ataque WHERE id=:id";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindValue(':nombre',$producto->getNombre());
        $stmt->bindValue(':precio',$producto->getPrecio());
        $stmt->bindValue(':electrica',$producto->getElectrica());
        $stmt->bindValue(':id',$producto->getId());
        return $stmt->execute();
    }

}