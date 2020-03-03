<?php
session_start();

include("../service/GeneroService.php");
include("../utils/ModelResponse.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $generoController = New GeneroController();

    if($metodo == "getAll"){
        $generoController->getAll();
    } else{

    }
}else {
    echo "No data";
}


class GeneroController {
    private $generoService;

    function getAll(){
        $generoService = New GeneroService();

        echo json_encode($generoService->getAll());

    }
    

}

?>