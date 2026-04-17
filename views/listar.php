<!DOCTYPE html>
<html>
<head>
    <title>Pokedex</title>
</head>
<body>
    <h1> Pokedex <h1>
        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>PS</th>
                <th>Ataque</th>
                <th>Defensa</th>
            </tr>

            <?php foreach ($pokemon as $p); ?>

            <td><?php $p->getId() ?> </td>
            <td><?php ($p instanceof Agua) ? "agua"  : (($p instanceof Fuego) ? "Fuego" : "Planta")  ?> </td>
            <td><?php $p->getNombre() ?> </td>
            <td><?php $p->getPs() ?> </td>
            <td><?php $p->getDefensa() ?> </td>
            <td><?php $p->getAtaque() ?> </td>
            
