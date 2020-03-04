<?php
session_start();

include("../service/UserService.php");
include("../service/EmpleadoService.php");
include("../utils/ModelResponse.php");
include("../validator/UserValidator.php");

if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $userController = New UserController();

    switch ($metodo) {
        case 'getAll':
            $userController->getAll();
            break;
        case 'login':
            $userController->login($_POST);
            break;
        case 'insert': 
            $userController->insert($_POST);
            break;
        default:
            # code...
            break;
    }


}else {
    echo "No data";
}


class UserController {
    private $userService;

    function getAll(){
        $userService = New UserService();

        echo json_encode($userService->getAll());

    }

    function getById($idPaciente){
        $userService = New UserService();

        echo json_encode($userService->getById($idPaciente));

    }

    // function insert($post){
    //     $modelResponse = new ModelResponse();

    //     $userModel = new User();
    //     $userModel->setId($post['idUsuario']);
    //     $userModel->setIdRol($post['idRol']);
    //     $userModel->setIdEmpleado($post['idEmpleado']);
    //     $userModel->setUsuario($post['nombreUsuario']);
    //     $userModel->setPassword($post['password']);
    //     $userModel->setPasswordConfirmacion($post['passwordConfirmacion']);
    //     $userModel->setEmail($post['correo']);
    //     $userModel->setIdEstado($post['idEstado']);
    //     $userModel->setFechaVencimiento($post['fechaVencimiento']);
        
    //     $userValidator = new UserValidator();
    //     $modelResponse = $userValidator->validarUsuario($userModel, "INS"); 

    //     if($modelResponse->getEstatus() != 200){
    //         echo json_encode($modelResponse);
    //         return null;
    //     }
    //     $userService = New UserService();
    //     $modelResponse = $userService->insert($userModel);
    //     echo json_encode($modelResponse);
    // }


    function insert($post){

        $modelResponse = new ModelResponse();

        // $empleadoController = new EmpleadoController();
        // $modelResponse = $empleadoController->insert($post);

        // //Se obtiene después de insertar el empleado
        // $idEmpleado = $modelResponse->getPk();

        $userModel = new User();
        $userModel->setId($post['idUsuario']);
        $userModel->setIdRol($post['idRol']);
        $userModel->setNombre($post['nombre']);
        $userModel->setApellido($post['apellido']);
        $userModel->setTelefono($post['telefono']);
        $userModel->setIdEmpleado($idEmpleado);
        $userModel->setUsuario($post['nombreUsuario']);
        $userModel->setPassword($post['password']);
        $userModel->setPasswordConfirmacion($post['passwordConfirmacion']);
        $userModel->setEmail($post['correo']);
        $userModel->setIdEstado($post['idEstado']);
        $userModel->setFechaVencimiento($post['fechaVencimiento']);
        
        $userValidator = new UserValidator();
        $modelResponse = $userValidator->validarUsuario($userModel, "INS"); 

        if($modelResponse->getEstatus() != 200){
            echo json_encode($modelResponse);
            return null;
        }
        $userService = New UserService();
        $modelResponse = $userService->insert($userModel);
        echo json_encode($modelResponse);
    }

    function login($post){
        if(isset($post['usuario']) && isset($post['password'])){
            $usuario =  $post['usuario'];
            $password =  $post['password'];

            $userService = New UserService();
            $userModel = $userService->login($usuario, $password);
    
            $modelResponse = new ModelResponse();
    
            if($userModel == null){
                $modelResponse->setEstatus(401);
                $modelResponse->setMensaje("Usuario o Contraseña incorrectos");
            } else {
                $modelResponse->setEstatus(200);
                $modelResponse->setData($userModel);
                $_SESSION['userId'] = $userModel->getId();
            }
    
            echo json_encode($modelResponse);
        } else {
            $modelResponse = new ModelResponse();
            $modelResponse->setEstatus(401);
            $modelResponse->setMensaje("NO autorizado");
            echo json_encode($modelResponse);
        }

    }

    

}

?>