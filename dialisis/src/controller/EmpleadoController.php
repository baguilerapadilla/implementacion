<?php
session_start();

include("../service/EmpleadoService.php");
include("../utils/ModelResponse.php");
include("../validator/EmpleadoValidator.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $empleadoController = New EmpleadoController();

    if($metodo == "getAll"){
        $empleadoController->getAll();
    } else if($metodo == "insert"){
        $empleadoController->insert($_POST);
    }
}else {
    echo "No data";
}


class EmpleadoController {
    private $empleadoService;

    function getAll(){
        $empleadoService = New EmpleadoService();

        echo json_encode($empleadoService->getAll());

    }

    function insert($post){

        $modelResponse = new ModelResponse();

        $empleadoModel = new EmpleadoModel();
        $empleadoModel->setIdMunicipio($post['idMunicipio']);
        $empleadoModel->setPrimerNombre($post['primerNombre']);
        $empleadoModel->setSegundoNombre($post['segundoNombre']);
        $empleadoModel->setPrimerApellido($post['primerApellido']);
        $empleadoModel->setSegundoApellido($post['segundoApellido']);
        $empleadoModel->setIdentidad($post['identidad']);
        $empleadoModel->setFechaNacimiento($post['fechaNacimiento']);
        $empleadoModel->setIdEstadoCivil($post['idEstadoCivil']);
        $empleadoModel->setIdGenero($post['idGenero']);
        $empleadoModel->setTelefono($post['telefono']);
        $empleadoModel->setDireccion($post['direccion']);
        $empleadoModel->setCorreo($post['correoEmpleado']);
       // $empleadoModel->setEmpleadoEstado($post['empleadoEstado']);

        $empleadoValidator = new EmpleadoValidator();
        $modelResponse = $empleadoValidator->validarEmpleado($empleadoModel, "INS"); 

        if($modelResponse->getEstatus() != 200){
            echo json_encode($modelResponse);
            return $modelResponse;
        } 
        
        $empleadoService = new EmpleadoService();
        $modelResponse = $empleadoService->insert($empleadoModel);

        echo json_encode($modelResponse);
    
    }

    
    

}

?>