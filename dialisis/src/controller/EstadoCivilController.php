<?php
session_start();

include("../service/EstadoCivilService.php");
include("../utils/ModelResponse.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $estadoCivilController = New EstadoCivilController();

    if($metodo == "getAll"){
        $estadoCivilController->getAll();
    } else{

    }
}else {
    echo "No data";
}


class EstadoCivilController {
    private $estadoCivilService;

    function getAll(){
        $estadoCivilService = New EstadoCivilService();
        
        echo json_encode($estadoCivilService->getAll());

    }
    

}

?>