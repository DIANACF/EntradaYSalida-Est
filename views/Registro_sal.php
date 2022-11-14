<?php
require __DIR__."\\..\\models\\Estudiante.php";
require __DIR__."\\..\\controllers\\db\\ConexionController.php";
require __DIR__."\\..\\controllers\\estudiantes\\EstudianteController.php";

$controlador = new EstudianteController();


if (isset($_POST['f_sal'])){ 
  $codigo = $_POST['f_sal'];
  $controlador->updateSalida($codigo);  
  $texto = "Salida registrada ";
  

}else{
    header("Location: error.php"); 
    exit();
} 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de salida</title>
</head>
<body>
    <h1><?php echo $texto; ?> </h1>
    <a href="../index.php">Regrese para verificar</a>
</body>