<?php

include("../utils/DBConnection.php");
include("../model/RolModel.php");

class RolService {

    public function getAll() {
        $rolList = [];

        $rolModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_roles a";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){

                $rolModel = new RolModel();
                $rolModel->setIdRol($res->id_rol);
                $rolModel->setRol($res->rol);
                $rolModel->setDescripcion($res->descripcion);
                $rolModel->setFechaCreacion($res->fecha_creacion);

                $rolList[] = $rolModel;
            }
        }
        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $rolList;

    }


}
?>