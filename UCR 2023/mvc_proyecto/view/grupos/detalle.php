<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container p-5" id="contendorprincipal">
    <div><?php echo $this->mensajeResultado; ?></div>
    <h3 class="text-center"><?php echo $this->mensaje; ?></h1>

    <form class="form-control" action="<?php echo constant('URL')?>grupos/actualizargrupo"  method="POST">
        <?php
            require 'form.php';
        ?>
          <div class="mb-3 text-center">
              
              <button type="submit" class="btn btn-primary ">Modificar</button>

          </div>
    </form>

</div>
<?php
    require 'view/footer.php';
?>
