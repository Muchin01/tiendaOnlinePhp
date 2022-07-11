<?php
include('./templates/header.php');
// include('./carrito.php');
?>
<br>

<div class="container">


    <?php if (!empty($_SESSION['CARRITO'])) { ?>

        <h4>Lista</h4>
        <table class="table table-dark table-bordered">
            <tbody>
                <tr>
                    <th width="40%">Descripcion</th>
                    <th width="15%" class=" text-center ">Cantidad</th>
                    <th width="20%" class=" text-center ">Precio</th>
                    <th width="20%" class=" text-center ">Total</th>
                    <th width="5%" class=" text-center ">--</th>
                </tr>
                <?php $total = 0 ?>
                <?php foreach ($_SESSION['CARRITO'] as $indice => $productos) { ?>
                    <tr>
                        <td width="40%"><?php echo $productos['nombre'] ?></td>
                        <!-- <td> <input class="form-control" type="number" name="" value="<?php echo $productos['cantida'] ?>" min="10" max="100"><?php echo $productos['cantida'] ?> </td> -->
                        <td width="15%" class=" text-center "> <?php echo $productos['cantida'] ?></td>
                        <td width="20%" class=" text-center "><?php echo $productos['precio'] ?></td>
                        <td width="20%" class=" text-center ">$<?php echo number_format($productos['precio'] * $productos['cantida'], 2); ?></td>
                        <td width="5%" class=" text-center ">
                            <form action="" method="POST">
                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($productos['id'], Cod, KEY) ?>">
                                <button name="btnAction" value="Delete" class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                    <?php $total += $productos['precio'] * $productos['cantida'] ?>
                <?php } ?>
                <tr>
                    <td align="right" colspan="3">
                        <h3>Total</h3>
                    </td>
                    <td>
                        <h3 class=" text-center ">$<?php echo number_format($total, 2) ?></h3>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form method="POST" action="pagar.php">
                            <div class="alert alert-success">
                                <div class="form-group">
                                    <label for="my-input">Correo de contacto:</label>
                                    <input id="email" class="form-control" type="email" name="email" placeholder="Escribe tu correo" required>
                                </div>
                                <small id="emailHelp" class="<small class=" text-muted">Los productos seran enviados por este correo</small>"
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder" name="btnAction">Proceder a realizar el pago >></button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-success">
            No se han agregado productos..-
        </div>
    <?php } ?>
</div>



<?php
include('./templates/footer.php');
?>