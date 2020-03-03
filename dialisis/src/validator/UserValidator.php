<?php

class UserValidator{

    function validarUsuario($userModel, $modo){
        $modelResponse = new ModelResponse();

        if($modo == "UPD"){
            if($userModel->getId() == null || $userModel->getId() == 0 || $userModel->getId() == ''){
                $modelResponse->setEstatus(500);
                $modelResponse->setMensaje("Error al obtener el id de usuario");
                return $modelResponse;
            }
        }

        if($userModel == null){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("Los datos no se obtenieron correctamente");
            return $modelResponse;
        }

        if($userModel->getUsuario() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Usuario es requerido");
            return $modelResponse;
        }

        if(strlen($userModel->getUsuario()) > 20){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Usuario no puede tener más de 20 caracteres");
            return $modelResponse;
        }

        if($userModel->getPassword() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("La contraseña es requerida");
            return $modelResponse;
        }

        if(strlen($userModel->getPassword()) > 150){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Contraseña no puede tener más de 150 caracteres");
            return $modelResponse;
        }

        if($userModel->getPasswordConfirmacion() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("La confirmación de la contraseña es requerida");
            return $modelResponse;
        }

        if(strlen($userModel->getPasswordConfirmacion()) > 150){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo de confirmación de la contraseña no puede tener más de 150 caracteres");
            return $modelResponse;
        }

        if($userModel->getPassword() != $userModel->getPasswordConfirmacion()){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("Las contraseñas no coinciden");
            return $modelResponse;
        }

        $modelResponse->setEstatus(200);
        return $modelResponse;

    }

}


?>