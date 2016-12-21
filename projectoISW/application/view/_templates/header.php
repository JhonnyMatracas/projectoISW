<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= isset($this->titulo) ? $this->titulo : "MINI" ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
    <!-- logo -->
    <div class="logo">
        MINI
    </div>

    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>preguntas/todas">Preguntas</a>
        <a href="<?php echo URL; ?>canciones">Canciones</a>
        <a href="<?php echo URL; ?>preguntas/crear">Insertar</a>
        <a href="<?php echo URL; ?>songs">songs</a>
    </div>
