<?php
require_once ("../utils/DBConnection.php");
include("../model/GeneroModel.php");

class GeneroService {

    public function getAll() {
        
        $generoList = [];

        $generoModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_generos a";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){

                $generoModel = new GeneroModel();
                $generoModel->setIdGenero($res->id_genero);
                $generoModel->setDescripcionGenero($res->descripcion_genero);

                $generoList[] = $generoModel;
            }
        }
        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $generoList;

    }


}
?>