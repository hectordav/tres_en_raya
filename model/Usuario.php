<?php
class Usuario extends EntidadBase{
    private $id;
    private $nombre;
    public function __construct($adapter) {
        $table="t_usuario";
        parent::__construct($table, $adapter);
    }
     
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
     
    public function getNombre() {
        return $this->nombre;
    }
 
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
 
    public function guardar(){
        $query="INSERT INTO t_usuario (id, nombre)VALUES(NULL,'".$this->nombre."');";
        $save=$this->db()->query($query);
        return $save;
    }

 
}
?>