<?php

    class Grupos extends Controller{
        function __construct()
        {
            parent::__construct();
            parent::connectionSession();

            $this->view->datos =[];
            $this->view->mensaje ="Seccion Grupos";
            $this->view->mensajeResultado=""; 
        }

        function render(){
            $datos = $this->model->getGrupos();
          
            //var_dump($datos); 
            $this->view->datos =$datos;
            $this->view->render('grupos/index');
            
        }

        function crear(){ //para ver la vista crear 
            //var_dump($datos); poder ver los datos
            $this->view->datos =[];
            $this->view->mensaje ="Crear Grupos";
            $this->view->render('grupos/crear');
            
        }

        function detalle(){ //para vear la vista detalle
            //var_dump($datos); poder ver los datos
            $this->view->datos =[];
            $this->view->mensaje ="Detalle Grupos";
            $this->view->render('Grupos/detalle');
            
        }


        function insertarGrupo()
        {
            if ($this->model->insertarGrupo($_POST)) {
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

        function verGrupos($param = null)
        {
    
            $id = $param[0];
            $datos = $this->model->verGrupos($id);
    
            $this->view->datos = $datos;
            $this->view->mensaje = "Detalle grupo";
            $this->view->render('grupos/detalle');
        }

        function actualizarGrupo()
        {
    
            if ($this->model->actualizarGrupo($_POST)) {
                $datos = new classGrupos();
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
            $this->render('grupos/detalle');
        }

        function eliminarGrupo($param = null){
            $id = $param[0];
            if ($this->model->eliminarGrupo($id)){
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