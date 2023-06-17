<?php

    class Profesores extends Controller{
        function __construct()
        {
            parent::__construct();
            parent::connectionSession();

            $this->view->datos =[];
            $this->view->mensaje ="Seccion Profesores";
            $this->view->mensajeResultado = "";
        }

        function render(){
            $datos = $this->model->getProfesores();
          
            //var_dump($datos); 
            $this->view->datos =$datos;
            $this->view->render('profesores/index');
            
        }
        function crear()
        { //para ver la vista crear 
            //var_dump($datos); poder ver los datos
            $this->view->datos = [];
            $this->view->mensaje = "Crear Profesores";
            $this->view->render('profesores/crear');
        }
        function detalle()
        { //para vear la vista detalle
            //var_dump($datos); poder ver los datos
            $this->view->datos = [];
            $this->view->mensaje = "Detalle Profesores";
            $this->view->render('profesores/detalle');
        }

        function insertarProfesor()
        {
            if ($this->model->insertarProfesor($_POST)) {
              
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

        function verProfesores($param = null)
        {
    
            $id = $param[0];
            $datos = $this->model->verProfesores($id);
    
            $this->view->datos = $datos;
            $this->view->mensaje = "Detalle Profesor";
            $this->view->render('profesores/detalle');
        }


        function actualizarProfesor()
        {
    
            if ($this->model->actualizarProfesor($_POST)) {
                $datos = new classProfesores();
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
            $this->render('profesores/detalle');
        }

        function eliminarProfesor($param = null){
            $id = $param[0];
            if ($this->model->eliminarProfesor($id)){
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