<?php
session_start();

include("../service/EstadoService.php");
include("../utils/ModelResponse.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $estadoController = New EstadoController();

    if($metodo == "getAll"){
        $estadoController->getAll();
    } else{

    }
}else {
    echo "No data";
}


class EstadoController {
    private $estadoService;

    function getAll(){
        $estadoService = New EstadoService();

        echo json_encode($estadoService->getAll());

    }
    

}

?>