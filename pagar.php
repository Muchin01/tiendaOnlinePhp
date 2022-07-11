<?php
include('./templates/header.php');
?>

<?php
if ($_POST) {
    $total = 0;
    $SID = session_id(); #obtenemos una id aleatoriamente
    $correo = $_POST['email']; #obtenemos el correo
    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        $total += $producto['precio'] * $producto['cantida'];
    }

    // insertamos a la tabla ventas
    $sentencia = $pdo->prepare("INSERT INTO `ventas`
     (`id_Venta`, `claveTransaccion`, `paypalDatos`, `fecha`, `correo`, `total`, `status`)
     VALUES (NULL,:claveTransaccion, '',NOW(),:correo,:total,'Pendiente');");

    $sentencia->bindParam(':claveTransaccion', $SID);
    $sentencia->bindParam(':correo', $correo);
    $sentencia->bindParam(':total', $total);
    $sentencia->execute();
    $idVenta = $pdo->lastInsertid();


    // insertamos a un maestro detalle de ventas. 
    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        $sentencia = $pdo->prepare("INSERT INTO
         `ventadetalle` (`id_ventaDetalle`, `id_Venta`, `id_Producto`, `precioUnitario`, `cantidad`) 
          VALUES (NULL, :id_Venta,:id_Producto , :precioUnitario, :cantidad);");

        $sentencia->bindParam(':id_Venta', $idVenta);
        $sentencia->bindParam(':id_Producto', $producto['id']);
        $sentencia->bindParam(':precioUnitario', $producto['precio']);
        $sentencia->bindParam(':cantidad', $producto['cantida']);
        $sentencia->execute();
    }


    // echo 'br';
    // echo 'br';
    // echo 'br';
    echo '<h3>' . $total . '</h3>';
}

?>


<div class="p-5 bg-ligth container text-center">
    <h1 class="display-3">Paso final</h1>
    <p class="lead">ya casi se reliza el pago. </p>
    <h4>$
        <?php echo  number_format($total, 2); ?>
    </h4>

    <hr class="my-2">
    <p class="lead">
    <div id="paypal-button-container"></div>
    </p>
</div>





<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '88.44'
                    }
                }]
            });
        },
        //
        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                // Replace the above to show a success message within this page, e.g.
                const element = document.getElementById('paypal-button-container');
                element.innerHTML = '';
                element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
        }


    }).render('#paypal-button-container');
</script>




<?php include './templates/footer.php'; ?>