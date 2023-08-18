<!DOCTYPE html>
<html>
<head>
    <title>Registrar Zoológico</title>
</head>
<body>
    <h1>Registrar Zoológico</h1>
    <form method="post" action="<?php echo site_url('zoologico/registrar'); ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Dirección:</label>
        <input type="text" name="direccion" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br>
        <input type="submit" value="Registrar">
    </form>
    <a href="<?php echo site_url('zoologico/index'); ?>">Volver al Listado</a>
</body>
</html>