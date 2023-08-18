<!DOCTYPE html>
<html>
<head>
    <title>Editar Zoológico</title>
</head>
<body>
    <h1>Editar Zoológico</h1>
    <form method="post" action="<?php echo site_url('zoologico/editar/' . $zoologico->id); ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $zoologico->nombre; ?>" required><br>
        <label>Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $zoologico->direccion; ?>" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $zoologico->telefono; ?>" required><br>
        <input type="submit" value="Actualizar">
    </form>
    <a href="<?php echo site_url('zoologico/index'); ?>">Volver al Listado</a>
</body>
</html>