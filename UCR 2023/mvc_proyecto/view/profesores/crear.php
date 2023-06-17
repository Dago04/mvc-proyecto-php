<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container p-5" id="contendorprincipal">

    <h3 class="text-center"><?php echo $this->mensaje; ?></h1>

        <form class="form-control" action="<?php echo constant('URL') ?>profesores/insertarprofesor" method="POST">
            <?php
            require 'form.php';

            ?>
            <div class="mb-3 text-center">
                <button type="reset" class="btn btn-danger ">Limpiar</button>
                <button type="submit" class="btn btn-primary ">Registrar</button>

            </div>
        </form>

</div>
<?php
require 'view/footer.php';
?>