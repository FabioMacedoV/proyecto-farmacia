<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL . rutaCss ?>">
    <link rel="stylesheet" href="<?= URL . rutaIcons ?>">
    <link rel="stylesheet" href="<?= URL . rutaCssBase ?>">
    <link rel="stylesheet" href="<?= URL . rutaCssCustom.'/mantenimiento.css' ?>">
    <link rel="stylesheet" href="<?= URL . rutaCssCustom.'/nav-mantenimiento.css' ?>">

    <?php if (isset($datos['css-ext'])) : ?>
    <link rel="stylesheet" href="<?= URL.$datos['css-ext'] ?>">
    <?php endif; ?>

    <title><?= $datos['title'] ?></title>
</head>
<body>