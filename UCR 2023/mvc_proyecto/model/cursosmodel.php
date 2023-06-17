<?php

include_once 'class/cursos.php';


class CursosModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    //Listar Curso
    public function getCursos(){
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `curso` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while($row =$query->fetch()){ //obtiene todas las filas
               $item = new classCursos();
               foreach ($row as $key => $value) {
                # code...
                    $item->$key = $value;
               }
               array_push($items,$item);
            }
            return $items;
        } catch (PDOException $th) {
            return [];
        }
    }


    public function insertarCurso($datos){
       
        try {
            $datos['id']="0";
            $datos['usuario'] = "Dago";
            $stringSQL= 'INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES (:id,:nombre,:descripcion,:tiempo,:usuario);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }

    public function verCursos($id){
       
       
        try {
            $item = new classCursos();
            //code...
            $stringSQL = "SELECT * FROM `curso` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);

            while($row =$query->fetch()){ //obtienela filas
              
               foreach ($row as $key => $value) {
                # code...
                    $item->$key = $value;
               }
               
            }
            return $item;
        } catch (PDOException $th) {
            return [];
        }
    }

    public function actualizarCurso($datos){
        try {
          
            $datos['usuario'] = "Dago";
            $stringSQL = 'UPDATE curso SET nombre=:nombre,descripcion=:descripcion,tiempo=:tiempo,usuario=:usuario WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }

    public function eliminarCurso($id){
        try {            
            //code...
            $stringSQL = "DELETE FROM `curso` WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);
            
            return true;
        } catch (PDOException $th) {
            //throw $th;
           
            return false;
        }           
    }
}

?>