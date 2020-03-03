<?php
session_start();

include("../service/MunicipioService.php");
include("../utils/ModelResponse.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $municipioController = New MunicipioController();

    if($metodo == "getAll"){
        $municipioController->getAll();
    } else if($metodo == "getByIdDepartamento"){
        $idDepartamento = $_GET['idDepartamento'];
        $municipioController->getByIdDepartamento($idDepartamento);
    }
}else {
    echo "No data";
}


class MunicipioController {
    private $municipioService;

    function getAll(){
        $municipioService = New MunicipioService();

        echo json_encode($municipioService->getAll());

    }

    function getByIdDepartamento($idDepartamento){
        $municipioService = New MunicipioService();

        echo json_encode($municipioService->getByIdDepartamento($idDepartamento));

    }
    

}







?>