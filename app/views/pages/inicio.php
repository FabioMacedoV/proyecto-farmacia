<?php require_once APP . '/views/inc/header.php' ?>

<header class="header">
    <div class="logo">
        <img src="<?= URL . rutaImg . "/logo-farmacia.jpg" ?>" alt="Logo NickyFarma">
    </div>

    <nav>
        <ul class="nav-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Categorías</a></li>
            <li><a href="#">Registro</a></li>
            <li>
                <a href="#">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </li>
        </ul>
    </nav>
    <a href="#" class="boton"><button><i class="fa-solid fa-door-open"></i> Ingresar</button></a>
</header>

<?php require_once APP . '/views/inc/footer.php' ?>