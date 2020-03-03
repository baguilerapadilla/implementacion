<?php
session_start();

include("../service/DepartamentoService.php");
include("../utils/ModelResponse.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $departamentoController = New DepartamentoController();

    if($metodo == "getAll"){
        $departamentoController->getAll();
    } else{

    }
}else {
    echo "No data";
}


class DepartamentoController {
    private $departamentoService;

    function getAll(){
        $departamentoService = New DepartamentoService();

        echo json_encode($departamentoService->getAll());

    }
    

}

?>