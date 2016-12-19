<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= isset($this->titulo) ? $this->titulo : "MINI" ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link href="--><?php //echo URL; ?><!--css/style.css" rel="stylesheet">-->
    <link href="<?php echo URL; ?>css/main.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<div class="container">
    <!-- logo -->

    <div class="logo col-lg-offset-5 col-xs-offset-4 ">
    <img src="<?=URL?>img/logo.png" />
    </div>

    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>login">Login</a>
<!--        <a href="--><?php //echo URL; ?><!--registro">Crear Cuenta</a>-->
        <a href="<?php echo URL; ?>preguntas/todas">Preguntas</a>
        <a href="<?php echo URL; ?>canciones">Canciones</a>
<!--        <a href="--><?php //echo URL; ?><!--preguntas/crear">Insertar</a>-->
<!--        <a href="--><?php //echo URL; ?><!--songs">songs</a>-->
    </div>
</div>