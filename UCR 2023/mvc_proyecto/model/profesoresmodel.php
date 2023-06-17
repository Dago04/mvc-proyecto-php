<?php

include_once 'class/profesores.php';


class ProfesoresModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    //Listar Curso
    public function getProfesores(){
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `profesor` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while($row =$query->fetch()){ //obtiene todas las filas
               $item = new classProfesores();
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

    public function insertarProfesor($datos){
      
        try {
            $datos['id']="0";
            $datos['usuario'] = "Dago";
            $stringSQL= 'INSERT INTO profesor(id, cedula, correoelectronico, telefono, telefonocelular, fechanacimiento, sexo, direccion, nombre, apellidopaterno, apellidomaterno, nacionalidad,usuario,idcarreras) VALUES (:id, :cedula, :correoelectronico, :telefono, :telefonocelular, :fechanacimiento, :sexo, :direccion, :nombre, :apellidopaterno, :apellidomaterno, :nacionalidad, :usuario, :idcarreras);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }
    public function verProfesores($id){
       
       
        try {
            $item = new classProfesores();
            //code...
            $stringSQL = "SELECT * FROM `profesor` where id=:id;";
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

    public function actualizarProfesor($datos){
        
        try {
          
            $datos['usuario'] = "Dago";
           
            $stringSQL = 'UPDATE profesor SET cedula=:cedula,correoelectronico=:correoelectronico,telefono=:telefono,telefonocelular=:telefonocelular,fechanacimiento=:fechanacimiento,sexo=:sexo,direccion=:direccion,nombre=:nombre,apellidopaterno=:apellidopaterno,apellidomaterno=:apellidomaterno,nacionalidad=:nacionalidad,usuario=:usuario,idcarreras=:idcarreras WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }

    public function eliminarProfesor($id){
        try {            
            //code...
            $stringSQL = "DELETE FROM `profesor` WHERE id =:id;";
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