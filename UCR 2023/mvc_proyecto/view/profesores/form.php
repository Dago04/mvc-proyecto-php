<div class="p-5">
    <div class="row">
      
        <div class="col-12 ">
            <div class="mb-3" <?php echo isset($this->datos->id) ? "hidden" : "hidden"; ?>>
                <label for="" class="form-label">Id</label>
                <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" 
                value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>">

            </div>

            <div class="mb-3" <?php echo isset($this->datos->cedula) ? "hidden" : "";?>>
                <label for="" class="form-label">Cedula</label>
                <input type="text" required class="form-control"  name="cedula" id="cedula" aria-describedby="helpId" placeholder="Ingrese la cedula del profesor" 
                value="<?php echo isset($this->datos->cedula) ? $this->datos->cedula : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Correo Electronico</label>
                <input type="email" required class="form-control" name="correoelectronico" id="correoelectronico" aria-describedby="helpId" placeholder="Ingrese el correo electronico del profesor" 
                value="<?php echo isset($this->datos->correoelectronico) ? $this->datos->correoelectronico : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Telefono</label>
                <input type="text" required class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Ingrese el telefono del profesor" 
                value="<?php echo isset($this->datos->telefono) ? $this->datos->telefono : ""; ?>">
            </div>

            <div class="mb-3" >
                <label for="" class="form-label">Telefono Celular</label>
                <input type="text" class="form-control" required  name="telefonocelular" id="telefonocelular" aria-describedby="helpId" placeholder="Ingrese el telefono celular del profesor" 
                value="<?php echo isset($this->datos->telefonocelular) ? $this->datos->telefonocelular : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Fecha de nacimiento</label>
                <input type="date" required class="form-control" name="fechanacimiento" id="fechanacimiento" aria-describedby="helpId" placeholder="Ingrese la fecha de nacimiento del profesor" 
                value="<?php echo isset($this->datos->fechanacimiento) ? $this->datos->fechanacimiento : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Sexo</label>
                <input type="text" required class="form-control" name="sexo" id="sexo" aria-describedby="helpId" placeholder="Ingrese el sexo del profesor" 
                value="<?php echo isset($this->datos->sexo) ? $this->datos->sexo : ""; ?>">
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Dirección</label>
                <input type="text" required class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Ingrese la dirección del profesor" 
                value="<?php echo isset($this->datos->direccion) ? $this->datos->direccion : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" required class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre del profesor" 
                value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Apellido Paterno</label>
                <input type="text" required class="form-control" name="apellidopaterno" id="apellidopaterno" aria-describedby="helpId" placeholder="Ingrese el apellido paterno del profesor" 
                value="<?php echo isset($this->datos->apellidopaterno) ? $this->datos->apellidopaterno : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Apellido Materno</label>
                <input type="text" required class="form-control" name="apellidomaterno" id="apellidomaterno" aria-describedby="helpId" placeholder="Ingrese el apellido materno del profesor" 
                value="<?php echo isset($this->datos->apellidomaterno) ? $this->datos->apellidomaterno : ""; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nacionalidad</label>
                <input type="text" required class="form-control" name="nacionalidad" id="nacionalidad" aria-describedby="helpId" placeholder="Ingrese la nacionalidad del profesor" 
                value="<?php echo isset($this->datos->nacionalidad) ? $this->datos->nacionalidad : ""; ?>">
            </div>

            <div class="mb-3"<?php echo isset($this->datos->usuario) ? "" : "hidden";?>>
                <label for="" class="form-label">Usuario</label>
                <input type="text" class="form-control" disabled name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingrese el usuario del profesor"
                value="<?php echo isset($this->datos->usuario) ? $this->datos->usuario : "";?>">
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Grupo</label>
                <input type="text" required class="form-control" name="idcarreras" id="idcarreras" aria-describedby="helpId" placeholder="Ingrese el grupo del profesor" 
                value="<?php echo isset($this->datos->idcarreras) ? $this->datos->idcarreras : ""; ?>">
            </div>

           

        </div>
    </div>

</div>