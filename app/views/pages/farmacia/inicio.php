<?php require_once APP . '/views/inc/header-principal.php' ?>

<?php require_once APP . '/views/inc/nav-principal.php' ?>

<div class="fondo-principal">
    <div class="row">
        <div class="col-7 titulos">
            <h1 class="titulo">Health & Care Nicky</h1>
            <h2 class="subtitulo">Todo lo que Necesitas para Cuidar de Tu Salud y la de Tu Familia</h2>
            <a href="#" class="boton-principal"><button>Contactar</button></a>
        </div>
        <!-- <div class="col imagen-fondo">
            <img src="<?= URL . rutaImg . "/logo-farmacia.png" ?>" alt="Logo NickyFarma">
        </div> -->
    </div>
</div>

<div class="categorias">
    <div class="row">
        <h2 class="titulo-categoria">Categorías</h2>
    </div>

    <div class="row">
        <div class="col img-categoria">
            <img src="<?= URL . rutaImg . "/bebe.jpg" ?>" alt="Logo NickyFarma">
        </div>
        <div class="col img-categoria">
            <img src="<?= URL . rutaImg . "/medicamentos.jpg" ?>" alt="Logo NickyFarma">
        </div>
    </div>
    <div class="row">
        <div class="col img-categoria">
            <img src="<?= URL . rutaImg . "/persona.jpg" ?>" alt="Logo NickyFarma">
        </div>
    </div>

</div>

<div class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <img src="<?= URL . rutaImg . "/logo-nav.png" ?>" alt="Logo NickyFarma" class="footer-logo">
            <p>Health & Care Nicky</p>
        </div>

        <div class="footer-section">
            <h4>Sitio Web</h4>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Categorías</a></li>
                <li><a href="#">Registro</a></li>
                <li><a href="#">Whatsapp</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Categorías</h4>
            <ul>
                <li><a href="#">Cuidado para el bebé</a></li>
                <li><a href="#">Cuidado personal</a></li>
                <li><a href="#">Medicamentos</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <img src="<?= URL . rutaImg . "/logo-nav.png" ?>" alt="Logo NickyFarma" class="footer-logo">
        </div>
    </div>

    <div class="footer-bottom">
        <p>Copyright ©2024 Nickymedic</p>
    </div>
</div>


<?php require_once APP . '/views/inc/footer.php' ?>