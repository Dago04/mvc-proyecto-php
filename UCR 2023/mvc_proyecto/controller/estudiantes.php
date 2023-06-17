<?php

class Estudiantes extends Controller
{
    function __construct()
    {
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Seccion Estudiantes";
        $this->view->mensajeResultado = "";
    }

    function render()
    {
        $datos = $this->model->getEstudiantes();

        //  var_dump($datos); 
        $this->view->datos = $datos;
        $this->view->render('estudiantes/index');
    }
    function crear()
    { //para ver la vista crear 
        //var_dump($datos); poder ver los datos
        $this->view->datos = [];
        $this->view->mensaje = "Crear Estudiantes";
        $this->view->render('estudiantes/crear');
    }
    function detalle()
    { //para vear la vista detalle
        //var_dump($datos); poder ver los datos
        $this->view->datos = [];
        $this->view->mensaje = "Detalle Estudiantes";
        $this->view->render('estudiantes/detalle');
    }

    function insertarEstudiante()
    {
        if ($this->model->insertarEstudiante($_POST)) {
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
    function verEstudiantes($param = null)
    {

        $id = $param[0];
        $datos = $this->model->verEstudiantes($id);

        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Estudiante";
        $this->view->render('estudiantes/detalle');
    }

    function actualizarEstudiante()
    {

        if ($this->model->actualizarEstudiante($_POST)) {
            $datos = new classEstudiantes();
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
        $this->render('estudiantes/detalle');
    }

    function eliminarEstudiante($param = null){
        $id = $param[0];
        if ($this->model->eliminarEstudiante($id)){
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
?>