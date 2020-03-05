<?php

include("../model/MunicipioModel.php");

class MunicipioService {

    public function getAll() {
        include_once("../utils/DBConnection.php");
        $municipioList = [];

        $municipioModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_municipios a";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){

                $municipioModel = new MunicipioModel();
                $municipioModel->setIdMunicipio($res->id_municipio);
                $municipioModel->setIdDepartamento($res->id_departamento);
                $municipioModel->setMunicipio($res->municipio);

                $municipioList[] = $municipioModel;
            }
        }
        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $municipioList;

    }

    //Retorna todos los municipios del departamento con el id del parámetro
    public function getByIdDepartamento($idDepartamento) {
        include_once("../utils/DBConnection.php");
        $municipioList = [];

        $municipioModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_municipios a WHERE a.id_departamento = ?";
       
        try {
            if ($stmt = $mysqli->prepare($sql)) {

                /* ligar parámetros para marcadores */
               $stmt->bind_param("i", 
                   $idDepartamento 
                );
           
                /* ejecutar la consulta */
               $stmt->execute(); 
               $result = $stmt->get_result();

            if ($result != null) {
                while($res = $result->fetch_object()){
    
                    $municipioModel = new MunicipioModel();
                    $municipioModel->setIdMunicipio($res->id_municipio);
                    $municipioModel->setIdDepartamento($res->id_departamento);
                    $municipioModel->setMunicipio($res->municipio);
    
                    $municipioList[] = $municipioModel;
                }
            }

           }
        

        } catch(Exception $e){
            return null;
        } finally {
            $mysqli->close();
            unset($res);
            unset($sql);
        }
 

        return $municipioList;

    }


}
?>