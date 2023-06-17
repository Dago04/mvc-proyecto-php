<?php

include_once 'class/grupos.php';


class GruposModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //Listar Curso
    public function getGrupos()
    {
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `grupo` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ($row = $query->fetch()) { //obtiene todas las filas
                $item = new classGrupos();
                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $th) {
            return [];
        }
    }


    public function insertarGrupo($datos){
       
        try {
            $datos['id']="0";
            
            $stringSQL= 'INSERT INTO grupo(id, nombre) VALUES (:id,:nombre);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }


    public function verGrupos($id)
    {


        try {
            $item = new classGrupos();
            //code...
            $stringSQL = "SELECT * FROM `grupo` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) { //obtienela filas

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
    public function actualizarGrupo($datos)
    {
        try {


            $stringSQL = 'UPDATE grupo SET nombre=:nombre  WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            return false;
        }
    }
    public function eliminarGrupo($id)
    {
        try {
            //code...
            $stringSQL = "DELETE FROM `grupo` WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id' => $id]);

            return true;
        } catch (PDOException $th) {
            //throw $th;

            return false;
        }
    }
}
