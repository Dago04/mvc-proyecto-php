<!-- <ul class="nav nav-tabs" id="navId" role="tablist">
<li class="nav-item">
  <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Cursos</a>
    <a class="dropdown-item" href="#tab3Id">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#tab4Id">Action</a>
  </div>
</li>
<li class="nav-item" role="presentation">
  <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
</li>

</ul> -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <div class="container-fluid">
      <!--icono-->
      <a class="navbar-brand" href="<?php echo constant('URL');?>main">
        <i class="bi bi-cup-hot-fill"></i>
        <span class="text-warning">Tearlament</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav me-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              href="#">Listas</a>
            <ul class="dropdown-menu bg-secondary">
              <li>
              <a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Ver Cursos</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>grupos">Ver Grupos</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes">Ver Estudiantes</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>profesores">Ver Profesores</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>usuarios">Ver Usuarios</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              href="#">Registro</a>
            <ul class="dropdown-menu bg-secondary">
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>cursos/crear">Agregar Cursos</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>grupos/crear">Agregar Grupos</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes/crear">Agregar Estudiante</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>profesores/crear">Agregar Profesores</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo constant('URL');?>usuarios/crear">Agregar Usuarios</a>
              </li>
             
            </ul>
          </li>
        </ul>
        <hr class="text-white-50" />
        <!--Enlaces redes sociales-->
        <ul class="text-light navbar-nav flex-row flex-wrap">
          <li class="nav-item col-6 col-md auto p-3">
            <i class="bi bi-github"></i>
            <small class="text-warning d-md-none ms-2"> Github</small>
          </li>
          <li class="nav-item col-6 col-md auto p-3">
            <i class="bi bi-instagram"></i>
            <small class="text-warning d-md-none ms-2"> Instagram</small>
          </li>
          <li class="nav-item col-6 col-md auto p-3">
            <i class="bi bi-whatsapp"></i>
            <small class="text-warning d-md-none ms-2"> Whatsapp</small>
          </li>
          <li class="nav-item col-6 col-md auto p-3">
            <i class="bi bi-envelope"></i>
            <small class="text-warning d-md-none ms-2">
              Correo Electronico</small>
          </li>
        </ul>
      </div>
    </div>
  </nav>