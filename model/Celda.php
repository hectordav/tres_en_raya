<?php
class Celda extends EntidadBase{
    private $id_jugadas;
    private $id_usuario;
    private $celda;
    private $valor;
    public function __construct($adapter) {
        $table="t_celda";
        parent::__construct($table, $adapter);
    }
    public function getId_jugada() {
        return $this->id_jugada;
    }
    public function setId_jugada($id_jugadas) {
        $this->id_jugada = $id_jugadas;
    } 
    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor) {
        $this->valor = $valor;
    } 
     public function getId_usuario() {
        return $this->id_usuario;
    }
    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    } 
    public function getCelda() {
        return $this->celda;
    }
    public function setCelda($celda) {
        $this->celda = $celda;
    } 
    public function guardar(){
        $query="INSERT INTO t_celda (id, id_jugadas, id_usuario, celda, valor)VALUES(NULL,
        '".$this->id_jugada."',
        '".$this->id_usuario."',
        '".$this->celda."',
        '".$this->valor."');";
        $save=$this->db()->query($query);
        echo $this->db()->error;
        return $save;
    } 
    
}
?>