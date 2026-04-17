<?php

class PokemonController {

    private $gestor;

    public function __construct($gestor) {
        $this->gestor = $gestor;
    }

    public function index() {}

    public function editar() {
        $id=$_GET['id'] ?? null;
        $pokemon=$this->gestor->buscarPorId($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pokemon->setNombre($_POST['nombre']);
            $pokemon->setPs($_POST['ps']);
            $pokemon->setDefensa($_POST('defensa'));
            $pokemon->setAtaque($_POST('ataque'));
        }
        $this->gestor->actualizar($pokemon);

        include "views/editar.php";
    }
    
    public function eliminar() {
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);
        header("Location: index.php");
        exit;
    }
}