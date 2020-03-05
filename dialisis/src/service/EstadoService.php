<?php

include("../model/EstadoModel.php");

class EstadoService {

    public function getAll() {
        include_once("../utils/DBConnection.php");
        $estadoList = [];

        $estadoModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_estado a";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){
                $estadoModel = new EstadoModel();
                $estadoModel->setIdEstado($res->id_estado);
                $estadoModel->setEstado($res->estado);
                
                $estadoList[] = $estadoModel;
            }
        }
        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $estadoList;

    }



}
?>