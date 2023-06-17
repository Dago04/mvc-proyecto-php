<?php

include_once 'class/usuarios.php';


class UsuariosModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    //Listar Curso
    public function getUsuarios(){
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `user` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while($row =$query->fetch()){ //obtiene todas las filas
               $item = new classUsuarios();
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


    public function insertarUsuario($datos){
       var_dump($datos);
        try {
            $datos['id']="0";
            $datos['password'] =hash('adler32','Dag0S@l@s1999.');
            $stringSQL= 'INSERT INTO user(id, name, email, password) VALUES (:id,:name,:email,:password);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }

    public function verUsuarios($id){
       
       
        try {
            $item = new classUsuarios();
            //code...
            $stringSQL = "SELECT * FROM `user` where id=:id;";
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

    public function actualizarUsuario($datos){
        try {
          
            
            $stringSQL = 'UPDATE user SET name=:name,email=:email,password=:password WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }

    public function eliminarUsuario($id){
        try {            
            //code...
            $stringSQL = "DELETE FROM `user` WHERE id =:id;";
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