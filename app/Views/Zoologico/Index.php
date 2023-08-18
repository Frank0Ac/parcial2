<!DOCTYPE html>
<html>
<head>
    <title>Listado de Zoológicos</title>
</head>
<body>
    <h1>Listado de Zoológicos</h1>
    <ul>
        <?php foreach ($zoologicos as $zoologico): ?>
            <li>
                <?php echo $zoologico->nombre; ?> - <?php echo $zoologico->direccion; ?> - <?php echo $zoologico->telefono; ?>
                [<a href="<?php echo site_url('zoologico/editar/' . $zoologico->id); ?>">Editar</a>]
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="<?php echo site_url('zoologico/registrar'); ?>">Registrar Nuevo Zoológico</a>
</body>
</html>