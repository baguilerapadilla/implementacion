<?php

class User implements JsonSerializable {

    private $id;
    private $idEmpleado;
    private $idRol;
    private $usuario;
    private $password;
    private $passwordConfirmacion;
    private $token;
    private $tokenPassword;
    private $passwordRequest;
    private $email;
    private $estadoToken;
    private $idEstado;
    private $estado;
    private $estadoModel; 
    private $intentos;
    private $fechaCreacion;
    private $fechaVencimiento;
    private $fechaToken;
    private $empleadoModel;
    private $rolModel;

 

    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

    }
    /**
     * Get the value of idEmpleado
     */ 
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set the value of idEmpleado
     *
     * @return  self
     */ 
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

    }

    /**
     * Get the value of idRol
     */ 
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * Set the value of idRol
     *
     * @return  self
     */ 
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;

    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

    }

    /**
     * Get the value of token
     */ 
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @return  self
     */ 
    public function setToken($token)
    {
        $this->token = $token;

    }

    /**
     * Get the value of tokenPassword
     */ 
    public function getTokenPassword()
    {
        return $this->tokenPassword;
    }

    /**
     * Set the value of tokenPassword
     *
     * @return  self
     */ 
    public function setTokenPassword($tokenPassword)
    {
        $this->tokenPassword = $tokenPassword;

    }

    /**
     * Get the value of passwordRequest
     */ 
    public function getPasswordRequest()
    {
        return $this->passwordRequest;
    }

    /**
     * Set the value of passwordRequest
     *
     * @return  self
     */ 
    public function setPasswordRequest($passwordRequest)
    {
        $this->passwordRequest = $passwordRequest;

    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

    }

    /**
     * Get the value of estadoToken
     */ 
    public function getEstadoToken()
    {
        return $this->estadoToken;
    }

    /**
     * Set the value of estadoToken
     *
     * @return  self
     */ 
    public function setEstadoToken($estadoToken)
    {
        $this->estadoToken = $estadoToken;

    }

    /**
     * Get the value of idEstado
     */ 
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set the value of idEstado
     *
     * @return  self
     */ 
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

    }

    /**
     * Get the value of intentos
     */ 
    public function getIntentos()
    {
        return $this->intentos;
    }

    /**
     * Set the value of intentos
     *
     * @return  self
     */ 
    public function setIntentos($intentos)
    {
        $this->intentos = $intentos;

    }


    /**
     * Get the value of fechaCreacion
     */ 
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set the value of fechaCreacion
     *
     * @return  self
     */ 
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

    }

    /**
     * Get the value of fechaVencimiento
     */ 
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set the value of fechaVencimiento
     *
     * @return  self
     */ 
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

    }

    /**
     * Get the value of fechaToken
     */ 
    public function getFechaToken()
    {
        return $this->fechaToken;
    }

    /**
     * Set the value of fechaToken
     *
     * @return  self
     */ 
    public function setFechaToken($fechaToken)
    {
        $this->fechaToken = $fechaToken;

    }
    

  

    /**
     * Get the value of empleadoModel
     */ 
    public function getEmpleadoModel()
    {
        return $this->empleadoModel;
    }

    /**
     * Set the value of empleadoModel
     *
     * @return  self
     */ 
    public function setEmpleadoModel($empleadoModel)
    {
        $this->empleadoModel = $empleadoModel;

        return $this;
    }

    /**
     * Get the value of rolModel
     */ 
    public function getRolModel()
    {
        return $this->rolModel;
    }

    /**
     * Set the value of rolModel
     *
     * @return  self
     */ 
    public function setRolModel($rolModel)
    {
        $this->rolModel = $rolModel;

        return $this;
    }

    /**
     * Get the value of estadoModel
     */ 
    public function getEstadoModel()
    {
        return $this->estadoModel;
    }

    /**
     * Set the value of estadoModel
     *
     * @return  self
     */ 
    public function setEstadoModel($estadoModel)
    {
        $this->estadoModel = $estadoModel;

        return $this;
    }

    /**
     * Get the value of passwordConfirmacion
     */ 
    public function getPasswordConfirmacion()
    {
        return $this->passwordConfirmacion;
    }

    /**
     * Set the value of passwordConfirmacion
     *
     * @return  self
     */ 
    public function setPasswordConfirmacion($passwordConfirmacion)
    {
        $this->passwordConfirmacion = $passwordConfirmacion;

        return $this;
    }
}
    




?>