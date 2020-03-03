<?php 

class ModelResponse implements JsonSerializable {
    private $estatus;
    private $mensaje;
    private $pk;
    private $data;

    public function jsonSerialize() {
        return (object) get_object_vars($this);
    }
    /**
     * Get the value of estatus
     */ 
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set the value of estatus
     *
     * @return  self
     */ 
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get the value of mensaje
     */ 
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set the value of mensaje
     *
     * @return  self
     */ 
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get the value of pk
     */ 
    public function getPk()
    {
        return $this->pk;
    }

    /**
     * Set the value of pk
     *
     * @return  self
     */ 
    public function setPk($pk)
    {
        $this->pk = $pk;

        return $this;
    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}


?>