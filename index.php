<?php
include('./templates/header.php');
// include('./global/config.php');
// include('./global/connection.php');
// include('./carrito.php');

?>
<br>
<br>
<?php if ($mensaje != "") { ?>

    <div class="alert alert-success container">
        <!-- <?php echo ($mensaje);
                ?> -->
        <a href="./detallesCarrito.php" class="badge badge-success">Ver detalles</a>
    </div>

<?php } ?>

<style>
    .nm {
        display: flex;
        margin: 100px;

    }

    @media only screen and (max-width: 600px) {
        body {
            background-color: lightblue;

        }

        .nm {
            margin: 10px;
        }

        img {
            height: auto;
            width: 200px;

        }

        .fond {
            width: 150px;
            margin: 10px;
        }


    }
</style>

<div class="row nm">
    <?php
    $setencia = $pdo->prepare("SELECT * FROM `tecnologias`");
    $setencia->execute();
    $lista = $setencia->fetchAll(PDO::FETCH_ASSOC);

    ?>

    <?php foreach ($lista as $product) { ?>
        <div class="col-3">
            <div class="card fond ">
                <img height="250px" title="<?php echo $product['descripcion'] ?>" alt="<?php echo $product['nombre'] ?>" class="card-img-top product" src="<?php echo $product['image'] ?>" data-bs-toggle="tooltip" data-bs-placement="right">
                <div class="card-body ">
                    <span><?php echo $product['nombre'] ?></span>
                    <h5 class="card-title">$<?php echo $product['precio'] ?></h5>

                    <form action="" method="POST">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($product['id'], Cod, KEY);  ?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($product['nombre'], Cod, KEY); ?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($product['precio'], Cod, KEY); ?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, Cod, KEY); ?>">
                        <button class="btn btn-primary" value="Agregar" name="btnAction" type="submit">Agregar</button>
                    </form>

                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php include './templates/footer.php'; ?>