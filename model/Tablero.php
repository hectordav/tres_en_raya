<?php
class Tablero extends EntidadBase{
    private $id_status;
    private $fecha;
    public function __construct($adapter) {
        $table="t_jugadas";
        parent::__construct($table, $adapter);
    }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getStatus() {
        return $this->id_status;
    }
    public function setStatus($id_status) {
        $this->id_status = $id_status;
    }
     
    public function getFecha() {
        return $this->fecha;
    }
 
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
 
    public function guardar(){
      $query="INSERT INTO t_jugadas (id, id_status, fecha)VALUES(NULL,'".$this->id_status."','".$this->fecha."');";
      $save=$this->db()->query($query);
      echo $this->db()->error;
      return $save;
    } 
    public function actualizar(){
      $query="UPDATE t_jugadas SET id_status='2' WHERE id='".$this->id."';";
      $save=$this->db()->query($query);
      echo $this->db()->error;
      return $save;
    } 
}
?>