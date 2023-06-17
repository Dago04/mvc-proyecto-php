<?php

class Usuarios extends Controller
{
    function __construct()
    {
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Seccion Usuarios";
        $this->view->mensajeResultado = "";
    }

    function render()
    { //para ver el index de cursos 
        $datos = $this->model->getUsuarios();
        //var_dump($datos); poder ver los datos
        $this->view->datos = $datos;
        $this->view->render('usuarios/index');
    }

    function crear()
    { //para ver la vista crear 
        //var_dump($datos); poder ver los datos
        $this->view->datos = [];
        $this->view->mensaje = "Crear Usuarios";
        $this->view->render('usuarios/crear');
    }

    function insertarUsuario()
    {
        if ($this->model->insertarUsuario($_POST)) {
            $mensajeResultado = '  
                <div class="alert alert-success alert-dismissible fade show mt-3 p-3 text-start" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Nuevo Registro
                </div>';
        } else {
            $mensajeResultado = '  
                <div class="alert alert-danger alert-dismissible fade show mt-3 p-3 text-start" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se Registro
                </div>';
        }

        $this->view->mensajeResultado = $mensajeResultado;
        $this->render();
    }

    function detalle()
    { //para vear la vista detalle
        //var_dump($datos); poder ver los datos
        $this->view->datos = [];
        $this->view->mensaje = "Detalle Usuarios";
        $this->view->render('usuarios/detalle');
    }

    function verUsuarios($param = null)
    {

        $id = $param[0];
        $datos = $this->model->verUsuarios($id);

        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Usuario";
        $this->view->render('usuarios/detalle');
    }

    function actualizarUsuario()
    {

        if ($this->model->actualizarUsuario($_POST)) {
            $datos = new classUsuarios();
            foreach ($_POST as $key => $value) {
                $datos->$key = $value;
                # code...
            }
            $mensajeResultado = '  
                <div class="alert alert-success alert-dismissible fade show mt-3 p-3 text-start" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Actualización de  Registro
                </div>';
        } else {
            $mensajeResultado = '  
                <div class="alert alert-danger alert-dismissible fade show mt-3 p-3 text-start" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se Actualizó
                </div>';
        }
        $this->view->datos = $datos;
        $this->view->mensajeResultado = $mensajeResultado;
        $this->render('usuarios/detalle');
    }

    function eliminarUsuario($param = null){
        $id = $param[0];
        if ($this->model->eliminarUsuario($id)){
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show mt-3 p-3 text-start" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Se elimino el Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-warning alert-dismissible fade show mt-3 p-3 text-start" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se elimino el Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    
}
