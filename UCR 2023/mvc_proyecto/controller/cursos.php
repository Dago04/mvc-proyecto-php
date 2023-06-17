<?php

class Cursos extends Controller
{
    function __construct()
    {
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Seccion Cursos";
        $this->view->mensajeResultado = "";
    }

    function render()
    { //para ver el index de cursos 
        $datos = $this->model->getCursos();
        //var_dump($datos); poder ver los datos
        $this->view->datos = $datos;
        $this->view->render('cursos/index');
    }

    function crear()
    { //para ver la vista crear 
        //var_dump($datos); poder ver los datos
        $this->view->datos = [];
        $this->view->mensaje = "Crear Cursos";
        $this->view->render('cursos/crear');
    }

    function insertarCurso()
    {
        if ($this->model->insertarCurso($_POST)) {
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
        $this->view->mensaje = "Detalle Cursos";
        $this->view->render('cursos/detalle');
    }

    function verCursos($param = null)
    {

        $id = $param[0];
        $datos = $this->model->verCursos($id);

        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Curso";
        $this->view->render('cursos/detalle');
    }

    function actualizarCurso()
    {

        if ($this->model->actualizarCurso($_POST)) {
            $datos = new classCursos();
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
        $this->render('cursos/detalle');
    }

    function eliminarCurso($param = null){
        $id = $param[0];
        if ($this->model->eliminarcurso($id)){
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
