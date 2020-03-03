<?php
session_start();

include("../service/RolService.php");
include("../utils/ModelResponse.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $rolController = New RolController();

    if($metodo == "getAll"){
        $rolController->getAll();
    } else{

    }
}else {
    echo "No data";
}


class RolController {
    private $rolService;

    function getAll(){
        $rolService = New RolService();

        echo json_encode($rolService->getAll());

    }
    

}

?>