<?php
class EstudianteController {

   public function getDetail($codigo) {
    $conex = new ConexionController();
    $sql = "select * from datosestudiante where codigo = $codigo";
    $resultados = $conex->query($sql);

    $estudiante = new Estudiante();

    if ($resultados->num_rows > 0){
        
        while($registro = $resultados->fetch_assoc()){
            $estudiante->setCodigo($registro['Codigo']);
            $estudiante->setNombres($registro['Nombres']);
            $estudiante->setFecha_entrada($registro['Fecha_Entrada']);
            $estudiante->setFecha_salida($registro['Fecha_Salida']);

        }

    }else {
        header("Location: error.php");
        exit();

    }
    $conex->close();
    return $estudiante;


   }

   public function updateEntrada($codigo){
    $conex = new ConexionController();
    $sql = "update datosestudiante set ";
    $sql.= "fecha_entrada= current_timestamp()";
    $sql.= "where codigo =" . $codigo;
    $resultado = $conex->query($sql);
    $conex->close();
    return $resultado;

   }

   public function updateSalida($codigo){
    $conex = new ConexionController();
    $sql = "update datosestudiante set ";
    $sql.= "fecha_salida= current_timestamp()";
    $sql.= "where codigo =" . $codigo;
    $resultado = $conex->query($sql);
    $conex->close();
    return $resultado;

   }

}
?>