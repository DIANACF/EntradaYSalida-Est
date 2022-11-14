<?php
class Estudiante{
    private $codigo;
    private $nombres;
    private $fecha_ent;
    private $fecha_salida;

    public function getCodigo (){
        return $this->codigo;
    }

    public function setCodigo ($val){ 
        $this->codigo =$val;
    }

    public function getNombres(){
        return $this->nombres;

    }

    public function setNombres($val){
        $this->nombres = $val;

    }

    public function getFecha_entrada(){
        return $this->fecha_ent;

    }

    public function setFecha_entrada($val) {
        $this->fecha_ent = $val;
    }

    public function getFecha_salida(){
        return $this->fecha_salida;

    }

    public function setFecha_salida($val){
        $this->fecha_salida = $val;

    }
}
?>