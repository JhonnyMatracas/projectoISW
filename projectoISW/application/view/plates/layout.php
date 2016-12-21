<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $titulo ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <?= $this->insert('partials/head/css') ?>
</head>

<body class="tile-x-bg no-follow">


    <?= $this->insert('partials/header/header') ?>

    <!-- CONTENIDO -->
    <?= $this->section('content') ?>
    <!-- /CONTENIDO -->

    <!-- FOOTER -->
    <?= $this->insert('partials/footer/main-footer') ?>
    <!-- /FOOTER -->

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <?= $this->insert('partials/head/js') ?>


    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>js/application.js"></script>
</body>
</html>
