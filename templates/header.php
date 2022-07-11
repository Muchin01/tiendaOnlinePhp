<?php
include('./global/config.php');
include('./global/connection.php');
include('./carrito.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- esta etiqueta meta hace que loss motores de busqeda sea clave -->
    <meta name="keywords" content="Computadoras, Tecnologia, Software">
    <!-- para dar una peueda descripción de nuestra tienda  -->
    <meta name="description" content="Encuentras todo lo que necesitas para hoome office, super computadoras">
    <!-- este es para poner un autor -->
    <meta name="author" content="Marlon Muchin">
    <!-- actualizar navegador cada cierto tiempo -->
    <!-- <meta http-equiv="refresh" content="30"> -->
    <!-- colocar un icon a la pestaña  -->
    <link rel="shortcut icon" href="././archivos/imagenes/onlineshopping.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./archivos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./archivos/bootstrap/js/bootstrap.js"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./archivos/css/styles.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>TecnoSoft</title>
</head>

<body>
    <nav class="nav_header navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <img class="logo-empresa" src="./archivos/imagenes/onlineshopping.png" alt="logo-empresa-TecnoSoft">
        <a class="navbar-brand title" href="index.php">TecnoSoft</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse carrito navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./detallesCarrito.php">Carrito(
                        <?php
                        echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);
                        ?> )
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <br>