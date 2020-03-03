<?php
include("../service/PacienteService.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $pacienteController = New PacienteController();

    if($metodo == "getAll"){
        $pacienteController->getAll();
    }
}else if(isset($_GET['idPaciente'])){
    $idPaciente = $_GET['idPaciente'];
    $pacienteController = New PacienteController();
    $pacienteController->getById($idPaciente);
    
}else {
    echo "No data";
}


class PacienteController {
    private $pacienteService;

    function getAll(){
        $pacienteService = New PacienteService();

        echo json_encode($pacienteService->getAll());

    }

    function getById($idPaciente){
        $pacienteService = New PacienteService();

        echo json_encode($pacienteService->getById($idPaciente));

    }

    

}


?>