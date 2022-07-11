<?php
session_start();
$mensaje = "";
if (isset($_POST['btnAction'])) {

    switch ($_POST['btnAction']) {
        case 'Agregar':
            if (is_numeric(openssl_decrypt($_POST['id'], Cod, KEY))) {
                $id = openssl_decrypt($_POST['id'], Cod, KEY);
                $mensaje = "Id correcto + " . $id;
            } else {
                $mensaje .= "Ocurrio algun Error ";
                break;
            }

            if (is_string(openssl_decrypt($_POST['nombre'], Cod, KEY))) {
                $nombre = openssl_decrypt($_POST['nombre'], Cod, KEY);
                $mensaje = "Nombre correcto + " . $nombre;
            } else {
                $mensaje .= "Ocurrio algun Error ";
                break;
            }

            if (is_numeric(openssl_decrypt($_POST['cantidad'], Cod, KEY))) {
                $cantida = openssl_decrypt($_POST['cantidad'], Cod, KEY);
                $mensaje = "Cantidad correcto + " . $cantida;
            } else {
                $mensaje .= "Ocurrio algun Error ";
                break;
            }

            if (is_numeric(openssl_decrypt($_POST['precio'], Cod, KEY))) {
                $precio = openssl_decrypt($_POST['precio'], Cod, KEY);
                $mensaje = "Precio correcto + " . $precio;
            } else {
                $mensaje .= "Ocurrio algun Error ";
                break;
            }

            if (!isset($_SESSION['CARRITO'])) {
                $producto = array(
                    'id' => $id,
                    'nombre' => $nombre,
                    'cantida' => $cantida,
                    'precio' => $precio
                );
                $_SESSION['CARRITO'][0] = $producto;
                $mensaje = "Producto Agregado..";
            } else {
                $idProducto = array_column($_SESSION['CARRITO'], "id");
                if (in_array($id, $idProducto)) {
                    echo " <script> alert('Producto ya existe en el carrito..');</script> ";
                } else {
                    $numeroProducto = count($_SESSION['CARRITO']);
                    $producto = array(
                        'id' => $id,
                        'nombre' => $nombre,
                        'cantida' => $cantida,
                        'precio' => $precio
                    );
                    $_SESSION['CARRITO'][$numeroProducto] = $producto;
                    $mensaje = "Producto Agregado..";
                }
            }
            // $mensaje = print_r($_SESSION, true);

            break;

        case 'Delete':
            if (is_numeric(openssl_decrypt($_POST['id'], Cod, KEY))) {
                $id = openssl_decrypt($_POST['id'], Cod, KEY);

                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if ($producto['id'] == $id) {
                        unset($_SESSION['CARRITO'][$indice]);
                        echo " <script> alert('Elemento Eliminado...'); </script> ";
                    }
                }
            }
            break;
    }
}
