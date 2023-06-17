<?php

include_once 'class/estudiantes.php';


class EstudiantesModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    //Listar Curso
    public function getEstudiantes(){
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `estudiante` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while($row =$query->fetch()){ //obtiene todas las filas
               $item = new classEstudiantes();
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

    public function insertarEstudiante($datos){
       
        try {
            $datos['id']="0";
            $datos['usuario'] = "Dago";
            $stringSQL= 'INSERT INTO estudiante(id, cedula, correoelectronico, telefono, telefonocelular, fechanacimiento, sexo, direccion, nombre, apellidopaterno, apellidomaterno, nacionalidad, idCarreras, usuario) VALUES (:id, :cedula, :correoelectronico, :telefono, :telefonocelular, :fechanacimiento, :sexo, :direccion, :nombre, :apellidopaterno, :apellidomaterno, :nacionalidad, :idCarreras, :usuario);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }
    public function verEstudiantes($id){
       
       
        try {
            $item = new classEstudiantes();
            //code...
            $stringSQL = "SELECT * FROM `estudiante` where id=:id;";
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
    public function actualizarEstudiante($datos){
        try {
          
            $datos['usuario'] = "Dago";
           
            $stringSQL = 'UPDATE estudiante SET cedula=:cedula,correoelectronico=:correoelectronico,telefono=:telefono,telefonocelular=:telefonocelular,fechanacimiento=:fechanacimiento,sexo=:sexo,direccion=:direccion,nombre=:nombre,apellidopaterno=:apellidopaterno,apellidomaterno=:apellidomaterno,nacionalidad=:nacionalidad,idCarreras=:idCarreras,usuario=:usuario WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }
    public function eliminarEstudiante($id){
        try {            
            //code...
            $stringSQL = "DELETE FROM `estudiante` WHERE id =:id;";
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