    <script src="<?= URL . rutaJs ?>"></script>

    <?php if (isset($datos['js-ext'])) : ?>
    <script src="<?= URL.$datos['js-ext'] ?>"></script>
    <?php endif; ?>

    <?php if (isset($datos['js-ext-extra'])) : ?>
    <script src="<?= URL.'/public'.$datos['js-ext-extra'] ?>"></script>
    <?php endif; ?>
    
</body>
</html>