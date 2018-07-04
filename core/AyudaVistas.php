<?php
class AyudaVistas{
    public function url($controlador=CONTROLLER_DEFAULT,$accion=ACTION_DEFAULT){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
     
    //Helpers para las vistas
}
?>