<?php

class EmpleadoValidator{

    function validarEmpleado(EmpleadoModel $empleadoModel, $modo){
        $modelResponse = new ModelResponse();

        if($modo == "UPD"){
            if($empleadoModel->getIdEmpleado() == null || $empleadoModel->getIdEmpleado() == 0 || $empleadoModel->getIdEmpleado() == ''){
                $modelResponse->setEstatus(500);
                $modelResponse->setMensaje("Error al obtener el id de empleado");
                return $modelResponse;
            }
        }

        if($empleadoModel == null){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("Los datos no se obtenieron correctamente");
            return $modelResponse;
        }

        if($empleadoModel->getPrimerNombre() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Primer Nombre es requerido");
            return $modelResponse;
        }

        if(strlen($empleadoModel->getPrimerNombre()) > 50){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Primer Nombre no puede tener más de 50 caracteres");
            return $modelResponse;
        }

        if($empleadoModel->getSegundoNombre() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Segundo Nombre es requerido");
            return $modelResponse;
        }

        if(strlen($empleadoModel->getSegundoNombre()) > 50){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Segundo Nombre no puede tener más de 50 caracteres");
            return $modelResponse;
        }

        if($empleadoModel->getPrimerApellido() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Primer Apellido es requerido");
            return $modelResponse;
        }

        if(strlen($empleadoModel->getPrimerApellido()) > 50){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Primer Apellido no puede tener más de 50 caracteres");
            return $modelResponse;
        }


        if($empleadoModel->getSegundoApellido() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Segundo Apellido es requerido");
            return $modelResponse;
        }

        if(strlen($empleadoModel->getSegundoApellido()) > 50){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Segundo Apellido no puede tener más de 50 caracteres");
            return $modelResponse;
        }


        if($empleadoModel->getIdentidad() == ''){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Identidad es requerido");
            return $modelResponse;
        }

        if(strlen($empleadoModel->getIdentidad()) > 30){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("El campo Identidad no puede tener más de 30 caracteres");
            return $modelResponse;
        }

        $modelResponse->setEstatus(200);
        return $modelResponse;

    }

}


?>