<?php

include("../utils/DBConnection.php");
include("../model/UserModel.php");
include("../model/EmpleadoModel.php");
include("../model/EstadoModel.php");
include("../model/RolModel.php");

class UserService {

    public function getAll() {
        $userList = [];

        $userModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_users a 
            INNER JOIN tbl_empleados b ON a.id_empleado = b.id_empleado 
            INNER JOIN tbl_estado c ON a.id_estado = c.id_estado 
            INNER JOIN tbl_roles d ON a.id_rol = d.id_rol";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){
                $empleadoModel = new EmpleadoModel();
                $empleadoModel->setIdEmpleado($res->id_empleado);
                $empleadoModel->setIdPaisNacimiento($res->id_pais_nacimiento);
                $empleadoModel->setIdDepartamento($res->id_departamento);
                $empleadoModel->setIdMunicipio($res->id_municipio);
                $empleadoModel->setIdNacionalidad($res->id_nacionalidad);
                $empleadoModel->setPrimerNombre($res->primer_nombre);
                $empleadoModel->setSegundoNombre($res->segundo_nombre);
                $empleadoModel->setPrimerApellido($res->primer_apellido);
                $empleadoModel->setSegundoApellido($res->segundo_apellido);
                $empleadoModel->setTipoIdentificacion($res->tipo_identificacion);
                $empleadoModel->setIdentidad($res->identidad);
                $empleadoModel->setFechaNacimiento($res->fecha_nacimiento);
                $empleadoModel->setEstadoCivil($res->estado_civil);
                $empleadoModel->setGenero($res->genero);
                $empleadoModel->setTelefono($res->telefono);
                $empleadoModel->setDireccion($res->direccion);
                $empleadoModel->setCorreo($res->correo);
                $empleadoModel->setEmpleadoEstado($res->empleado_estado);
                $empleadoModel->setCreadoPor($res->creado_por);
                $empleadoModel->setFechaCreacion($res->fecha_creacion);
                $empleadoModel->setModificadoPor($res->modificado_por);
                $empleadoModel->setFechaModificacion($res->fecha_modificacion);

                $estadoModel = new EstadoModel();
                $estadoModel->setIdEstado($res->id_estado);
                $estadoModel->setEstado($res->estado);

                $rolModel = new RolModel();
                $rolModel->setIdRol($res->id_rol);
                $rolModel->setRol($res->rol);
                $rolModel->setDescripcion($res->descripcion);
                $rolModel->setFechaCreacion($res->fecha_creacion);

                $userModel = new User();
                $userModel->setId($res->id);
                $userModel->setIdEmpleado($res->id_empleado);
                $userModel->setIdRol($res->id_rol);
                $userModel->setUsuario($res->usuario);
                $userModel->setPassword($res->password);
                $userModel->setToken($res->token);
                $userModel->setTokenPassword($res->token_password);
                $userModel->setPasswordRequest($res->password_request);
                $userModel->setEmail($res->email);
                $userModel->setEstadoToken($res->estado_token);
                $userModel->setIdEstado($res->id_estado);
                $userModel->setEstado($res->estado);
                $userModel->setIntentos($res->intentos);
                $userModel->setFechaCreacion($res->fecha_creacion);
                $userModel->setFechaVencimiento($res->fecha_vencimiento);
                $userModel->setFechaToken($res->fecha_token);
                $userModel->setEmpleadoModel($empleadoModel);
                $userModel->setEstadoModel($estadoModel);
                $userModel->setRolModel($rolModel);
                

                $userList[] = $userModel;
            }
        }
        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $userList;

    }



   
    

    public function insert($userModel) {
        $modelResponse = new ModelResponse();
        
        $mysqli = DBConnection::getDbConnection();

        $sql = "INSERT INTO tbl_users (id_empleado, id_rol, usuario, password, email, id_estado, fecha_creacion, fecha_vencimiento)
        VALUES (?, ?, ?, SHA1(?), ?, ?, NOW(), ?)";
        
        try {
            if ($stmt = $mysqli->prepare($sql)) {

                /* ligar parámetros para marcadores */
               $stmt->bind_param("iisssis", 
                    $userModel->getIdEmpleado(),
                    $userModel->getIdRol(),
                    $userModel->getUsuario(),
                    $userModel->getPassword(),
                    $userModel->getEmail(),
                    $userModel->getIdEstado(),
                    $userModel->getFechaVencimiento()
                );
           
                /* ejecutar la consulta */
               $stmt->execute();   
            
               $modelResponse->setEstatus(200);
               $modelResponse->setMensaje("Los datos se guardaron con éxito");
           }

        } catch(Exception $e){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("No se pudieron guardar los cambios");
        } finally {
            $mysqli->close();
            unset($sql);
        }

        return $modelResponse;       

    }

   


    public function login($usuario, $password) {
        
        $userModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_users a  WHERE a.usuario = ? AND a.password= ?;";
        
        if ($stmt = $mysqli->prepare($sql)) {

             /* ligar parámetros para marcadores */
            //EJEMPLO
             //$stmt = $mysqli->prepare("INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)");
             //$stmt->bind_param('sssd', $code, $language, $official, $percent);
            $passwordEncriptada = sha1($password);
            $stmt->bind_param("ss", $usuario, $passwordEncriptada);
        
             /* ejecutar la consulta */
            $stmt->execute();   
         
             /* instead of bind_result: */
            $result = $stmt->get_result();

            while($res = $result->fetch_object()){
                $userModel = new User();
                $userModel->setId($res->id);
                $userModel->setIdEmpleado($res->id_empleado);
                $userModel->setIdRol($res->id_rol);
                $userModel->setUsuario($res->usuario);
               // $userModel->setPassword($res->password);
            //$userModel->setToken($res->token);
               // $userModel->setTokenPassword($res->token_password);
                $userModel->setPasswordRequest($res->password_request);
                $userModel->setEmail($res->email);
                $userModel->setEstadoToken($res->estado_token);
                $userModel->setIdEstado($res->id_estado);
                $userModel->setEstado($res->estado);
                $userModel->setIntentos($res->intentos);
                $userModel->setFechaCreacion($res->fecha_creacion);
                $userModel->setFechaVencimiento($res->fecha_vencimiento);
                $userModel->setFechaToken($res->fecha_token);
            }
            $mysqli->close(); 
        }
        $result->close();
        unset($res);
        unset($sql);

        return $userModel;       

    }


}
?>