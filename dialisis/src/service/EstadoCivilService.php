<?php

include("../model/EstadoCivilModel.php");

class EstadoCivilService {

    public function getAll() {
        include_once("../utils/DBConnection.php");
        $estadoCivilList = [];

        $estadoCivilModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_estados_civiles a";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){

                $estadoCivilModel = new EstadoCivilModel();
                $estadoCivilModel->setIdEstadoCivil($res->id_estado_civil);
                $estadoCivilModel->setDescripcionEstadoCivil($res->descripcion_estado_civil);

                $estadoCivilList[] = $estadoCivilModel;
            }
        }        

        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $estadoCivilList;

    }


}
?>