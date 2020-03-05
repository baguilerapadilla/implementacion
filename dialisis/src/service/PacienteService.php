<?php 

include("../model/PacienteModel.php");
include("../model/ClinicaModel.php");

class PacienteService {

    public function getAll() {
        include_once("../utils/DBConnection.php");
        $pacienteList = [];

        $pacienteModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * from tbl_pacientes a LEFT JOIN tbl_clinica b ON a.id_clinica = b.id_clinica";
        
        if ($result = $mysqli->query($sql)) {
            while($res = $result->fetch_object()){
                $clinica = New Clinica();
                $clinica->setIdClinica($res->id_clinica);
                $clinica->setIdDepartamento($res->id_departamento);
                $clinica->setNombreClinica($res->nombre_clinica);

                $pacienteModel = new PacienteModel();
                $pacienteModel->setIdPaciente($res->id_paciente);
                $pacienteModel->setIdClinica($res->id_clinica);
                $pacienteModel->setIdPrograma($res->id_programa);
                $pacienteModel->setIdTurno($res->id_turno);
                $pacienteModel->setIdReferencia($res->id_referencia);
                $pacienteModel->setIdDireccion($res->id_direccion);
                $pacienteModel->setIdTipoAcceso($res->id_tipo_acceso);
                $pacienteModel->setIdPatologia($res->id_patologia);
                $pacienteModel->setCodigoPaciente($res->codigo_paciente);
                $pacienteModel->setNombrePac($res->nombre_pac);
                $pacienteModel->setApellidoPac($res->apellido_pac);
                $pacienteModel->setIdentidadPac($res->identidad_pac);
                $pacienteModel->setExpediente($res->expediente);
                $pacienteModel->setFechaIng($res->fecha_ing);
                $pacienteModel->setTratamietoPorSemana($res->tratamieto_por_semana);
                $pacienteModel->setEdad($res->edad);
                $pacienteModel->setGenero($res->genero);
                $pacienteModel->setTelefonoPac($res->telefono_pac);
                $pacienteModel->setEstadoCivil($res->estado_civil);
                $pacienteModel->setClinica($clinica);

                $pacienteList[] = $pacienteModel;
            }
        }
        $mysqli->close();
        unset($res);
        unset($sql);
        unset($query);

        return $pacienteList;

    }



    public function getById($idPaciente) {
        include_once("../utils/DBConnection.php");
        $pacienteModel = null;
        $mysqli = DBConnection::getDbConnection();

        $sql = "SELECT * from tbl_pacientes a LEFT JOIN tbl_clinica b ON a.id_clinica = b.id_clinica WHERE id_paciente = ?;";
        
        if ($stmt = $mysqli->prepare($sql)) {

             /* ligar parámetros para marcadores */
            $stmt->bind_param("i", $idPaciente);
        
             /* ejecutar la consulta */
            $stmt->execute();   
         
             /* instead of bind_result: */
            $result = $stmt->get_result();

            while($res = $result->fetch_object()){
                $clinica = New Clinica();
                $clinica->setIdClinica($res->id_clinica);
                $clinica->setIdDepartamento($res->id_departamento);
                $clinica->setNombreClinica($res->nombre_clinica);

                $pacienteModel = new PacienteModel();
                $pacienteModel->setIdPaciente($res->id_paciente);
                $pacienteModel->setIdClinica($res->id_clinica);
                $pacienteModel->setIdPrograma($res->id_programa);
                $pacienteModel->setIdTurno($res->id_turno);
                $pacienteModel->setIdReferencia($res->id_referencia);
                $pacienteModel->setIdDireccion($res->id_direccion);
                $pacienteModel->setIdTipoAcceso($res->id_tipo_acceso);
                $pacienteModel->setIdPatologia($res->id_patologia);
                $pacienteModel->setCodigoPaciente($res->codigo_paciente);
                $pacienteModel->setNombrePac($res->nombre_pac);
                $pacienteModel->setApellidoPac($res->apellido_pac);
                $pacienteModel->setIdentidadPac($res->identidad_pac);
                $pacienteModel->setExpediente($res->expediente);
                $pacienteModel->setFechaIng($res->fecha_ing);
                $pacienteModel->setTratamietoPorSemana($res->tratamieto_por_semana);
                $pacienteModel->setEdad($res->edad);
                $pacienteModel->setGenero($res->genero);
                $pacienteModel->setTelefonoPac($res->telefono_pac);
                $pacienteModel->setEstadoCivil($res->estado_civil);
                $pacienteModel->setClinica($clinica);
            }
            $mysqli->close(); 
        }
        $result->close();
        unset($res);
        unset($sql);

        return $pacienteModel;       

    }


}

// $pacienteService = new PacienteService();
// var_dump($pacienteService->getById(2));


?>