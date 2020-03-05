<?php
require_once ("../utils/DBConnection.php");
include("../model/EmpleadoModel.php");

class EmpleadoService {

    public function getAll() {
        
        $empleadoList = [];

        $empleadoModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * FROM tbl_empleados a";
        

        try {
  
            if ($result = $mysqli->query($sql)) {
                while($res = $result->fetch_object()){
                    $empleadoModel = new EmpleadoModel();
                    $empleadoModel->setIdEmpleado($res->id_empleado);
                    $empleadoModel->setIdMunicipio($res->id_municipio);
                    $empleadoModel->setPrimerNombre($res->primer_nombre);
                    $empleadoModel->setSegundoNombre($res->segundo_nombre);
                    $empleadoModel->setPrimerApellido($res->primer_apellido);
                    $empleadoModel->setSegundoApellido($res->segundo_apellido);
                    $empleadoModel->setIdentidad($res->identidad);
                    $empleadoModel->setFechaNacimiento($res->fecha_nacimiento);
                    $empleadoModel->setIdEstadoCivil($res->idEstadoCivil);
                    $empleadoModel->setIdGenero($res->idGenero);
                    $empleadoModel->setTelefono($res->telefono);
                    $empleadoModel->setDireccion($res->direccion);
                    $empleadoModel->setCorreo($res->correo);
                    $empleadoModel->setEmpleadoEstado($res->empleado_estado);
                
                    $empleadoList[] = $empleadoModel;
                }
            }
            
        } catch(Exception $e) {
            return null;
        } finally {
            $mysqli->close();
            unset($res);
            unset($sql);
            unset($query);
        }

        return $empleadoList;

    }


    public function insert(EmpleadoModel $empleadoModel) {
        $modelResponse = new ModelResponse();
        
        $mysqli = DBConnection::getDbConnection();

        $sql = "INSERT INTO tbl_empleados (id_municipio, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido,
        identidad, fecha_nacimiento, idEstadoCivil, idGenero, telefono, direccion, correo, empleado_estado)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)
        ";
        
        try {
            if ($stmt = $mysqli->prepare($sql)) {

                /* ligar parámetros para marcadores */
               $stmt->bind_param("issssssiisssi", 
                    $empleadoModel->getIdMunicipio(),
                    $empleadoModel->getPrimerNombre(),
                    $empleadoModel->getSegundoNombre(),
                    $empleadoModel->getPrimerApellido(),
                    $empleadoModel->getSegundoApellido(),
                    $empleadoModel->getIdentidad(),
                    $empleadoModel->getFechaNacimiento(),
                    $empleadoModel->getIdEstadoCivil(),
                    $empleadoModel->getIdGenero(),
                    $empleadoModel->getTelefono(),
                    $empleadoModel->getDireccion(),
                    $empleadoModel->getCorreo(),
                    $empleadoModel->getEmpleadoEstado()
                );
           
                /* ejecutar la consulta */
                var_dump($stmt->execute());
                
               $pk = $stmt->insert_id;  

                
               $modelResponse->setEstatus(200);
               $modelResponse->setMensaje("Los datos se guardaron con éxito");
               $modelResponse->setPk($pk);
           }
         

        } catch(Exception $e){
            $modelResponse->setEstatus(500);
            $modelResponse->setMensaje("No se pudieron guardar los cambios");
        }finally {
            $mysqli->close();
            unset($sql);
        }

        return $modelResponse;       

    }





}

/* inser */
?>