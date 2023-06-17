<div class="p-5">
    <div class="row">
    <!-- #SELECT id, name, email, password FROM user WHERE 1 -->
        <div class="col-12 ">
            <div class="mb-3" <?php echo isset($this->datos->id) ? "hidden" : "hidden";?>>
                <label for="" class="form-label">Id</label>
                <input type="text" class="form-control"  name="id" id="id" aria-describedby="helpId" placeholder="" 
                value="<?php echo isset($this->datos->id) ? $this->datos->id : "";?>">

            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text " required class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Ingrese el nombre del usuario" 
                value="<?php echo isset($this->datos->name) ? $this->datos->name : "";?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Correo Electronico</label>
                <input type="email" required class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Ingrese el correo del usuario"
                value="<?php echo isset($this->datos->email) ? $this->datos->email : "";?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Contraseña</label>
                <input type="password" required class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese la contraseña del usuario"
                value="<?php echo isset($this->datos->password) ? $this->datos->password : "";?>">
            </div>

        </div>
    </div>

</div>