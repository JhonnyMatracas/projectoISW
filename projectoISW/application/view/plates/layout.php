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

<!-- /HEADER -->
<div class="page-wrapper shadow">
    <!-- Header Block
    ============================================== -->
    <header class="header-block">
        <!--  Main Header -->
        <?= $this->insert('partials/header/header') ?>

    </header>
    <!-- /Header Block
============================================== -->
</div>
<!-- /HEADER -->


    <!-- CONTENIDO -->
    <?= $this->section('content') ?>
    <!-- /CONTENIDO -->

    <?php if ($_SERVER['REQUEST_URI'] != '/signup'):?>
        <!-- FOOTER -->
        <?= $this->insert('partials/footer/main-footer') ?>
        <!-- /FOOTER -->
    <?php endif;?>
    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <?= $this->insert('partials/head/js') ?>



</body>
</html>
