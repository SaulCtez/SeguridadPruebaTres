<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="inicio.php">Empresa</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MostrarCarrito.php">Carrito(<?php
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>)</a>
                </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Secciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="distopia.php">Distopìa</a></li>
            <li><a class="dropdown-item" href="fantasia.php">Fantasia</a></li>
            <li><a class="dropdown-item" href="terror.php">Terror</a></li>
          </ul>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="controlador/controlador_cerrar_session.php" tabindex="-1" aria-disabled="true">salir</a>
                </li>
            </ul>
        </div>
    </nav>
</br>
</br>
<div class="container">
