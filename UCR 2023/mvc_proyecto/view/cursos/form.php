<div class="p-5">
    <div class="row">
        <div class="col-12 ">
            <div class="mb-3" <?php echo isset($this->datos->id) ? "hidden" : "hidden";?>>
                <label for="" class="form-label">Id</label>
                <input type="text" class="form-control"  name="id" id="id" aria-describedby="helpId" placeholder="" 
                value="<?php echo isset($this->datos->id) ? $this->datos->id : "";?>">

            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text " required class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre del curso" 
                value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : "";?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <input type="text" required class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Ingrese la descripción del curso"
                value="<?php echo isset($this->datos->descripcion) ? $this->datos->descripcion : "";?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tiempo</label>
                <input type="text" required class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el tiempo del curso"
                value="<?php echo isset($this->datos->tiempo) ? $this->datos->tiempo : "";?>">
            </div>

            <div class="mb-3"<?php echo isset($this->datos->usuario) ? "" : "hidden";?>>
                <label for="" class="form-label">Usuario</label>
                <input type="text" class="form-control" disabled name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingrese el usuario del curso"
                value="<?php echo isset($this->datos->usuario) ? $this->datos->usuario : "";?>">
            </div>

          

        </div>
    </div>

</div>