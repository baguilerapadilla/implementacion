<?php

include_once("../model/DepartamentoModel.php");

class DepartamentoService {

    public function getAll() {
        include("../utils/DBConnection.php");
        $departamentoList = [];

        $departamentoModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_departamentos a";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){

                $departamentoModel = new DepartamentoModel();
                $departamentoModel->setIdDepartamento($res->id_departamento);
                $departamentoModel->setIdPais($res->id_pais);
                $departamentoModel->setDepartamento($res->departamento);

                $departamentoList[] = $departamentoModel;
            }
        }
        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $departamentoList;

    }


}
?>