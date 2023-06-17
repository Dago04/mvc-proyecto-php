<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid text-center p-3 ps-5 pe-5 " id="contendorprincipal">
    <h3 style="color: black;"><?php echo $this->mensaje; ?></h1>
        <?php
        echo $this->mensajeResultado;
        ?>
        <?php require 'view/search.php'; ?>
        <div class="table-responsive ">
            <table class="table table-striped
        table-hover	
        table-borderless
        table-secondary
        align-middle
        caption-top
        ">
                <thead class="table-light">
                    <caption style="color:black"><?php echo $this->mensaje; ?></caption>
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Correo Electronico</th>
                        <th>Telefono</th>
                        <th>Telefono Celular</th>
                        <th>Fecha de nacimiento</th>
                        <th>Sexo</th>
                        <th>Dirección</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nacionalidad</th>
                        <th>Grupo</th>
                        <th>Usario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="tablaDatos">

                    <?php
                    foreach ($this->datos as $row) {
                        $datos = new classEstudiantes();
                        $datos = $row;
                        echo '
                        <tr class="table-secondary">
                        <td scope="row">' . $datos->id . '</td>
                        <td>' . $datos->cedula . '</td>
                        <td>' . $datos->correoelectronico . '</td>
                        <td>' . $datos->telefono . '</td>
                        <td>' . $datos->telefonocelular . '</td>
                        <td>' . $datos->fechanacimiento . '</td>
                        <td>' . $datos->sexo . '</td>
                        <td>' . $datos->direccion . '</td>
                        <td>' . $datos->nombre . '</td>
                        <td>' . $datos->apellidopaterno . '</td>
                        <td>' . $datos->apellidomaterno . '</td>
                        <td>' . $datos->nacionalidad . '</td>
                        <td>' . $datos->idCarreras . '</td>
                        <td>' . $datos->usuario . '</td>
                        <td>
                            <a name="eliminar" id="eliminar" class="btn btn-danger btn-sm " href="' . constant('URL') . 'estudiantes/eliminarEstudiante/' . $datos->id . '" role="button">Eliminar</a>
                           
                            <a name="editar" id="editar" class="btn btn-primary btn-sm" href="' . constant('URL') . 'estudiantes/verEstudiantes/' . $datos->id . '" role="button">Editar</a>
                        </td>
                    </tr>';
                    }
                    ?>




                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>

</div>
<script src="<?php echo constant('URL'); ?>public\js\tablaDatos.js"> </script>
<?php require 'view/footer.php'; ?>