<!DOCTYPE html>
<html>
<head>
    <title>Editar Pokemon</title>
</head>
<body>
    <h1>Editar Pokemon</h1>

    <form method="POST">
        ID:<br>
        <input type="text" name="id" value="<?= $producto->getId() ?>" required><br><br>

        Nombre:<br>
        <input type="text" name="nombre" value="<?= $producto->getNombre() ?>" required><br><br>

        Nombre:<br>
        <input type="text" name="tipo" value="<?= $producto->getNombre() ?>" required><br><br>

        PS:<br>
        <input type="text" name="ps" value="<?= $producto->getPs() ?>" required><br><br>

        Defensa:<br>
        <input type="text" name="defensa" value="<?= $producto->getDefensa() ?>" required><br><br>

        Ataque:<br>
        <input type="text" name="ataque" value="<?= $producto->getAtaque() ?>" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
