<?php

require_once "autoload.php";
session_start();

$gestor = new GestorPDO;
$pokemonController = new PokemonController;
$usuarioController = new UsuarioController;

$accion = $_GET['accion'] ?? 'index';


