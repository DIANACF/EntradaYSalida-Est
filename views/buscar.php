<?php
require __DIR__."\\..\\models\\Estudiante.php";
require __DIR__."\\..\\controllers\\db\\ConexionController.php";
require __DIR__."\\..\\controllers\\estudiantes\\EstudianteController.php";
$codigo = $_POST['codigo'];

if(empty($codigo)){
    header("Location: error.php");
    exit();
}
$controlador = new EstudianteController();
$estudiante = $controlador->getDetail($codigo);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Buscar</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Fecha_Entrada</th>
                <th>Fecha_Salida</th>
                <th>Accion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td> <?php echo $estudiante->getCodigo(); ?> </td> 
                <td> <?php echo $estudiante->getNombres(); ?> </td>
                <td> <?php echo $estudiante->getFecha_entrada(); ?> </td>
                <td> <?php echo $estudiante->getFecha_salida(); ?> </td> 
                <td>
                    <form action = "Registro_ent.php" method="post">
                        
                        <input type="hidden" name= "f_ent" value= "<?php echo $estudiante->getCodigo();?>" >
                        <button type = "submit">Entrada</button>
                    </form> 
                </td> 
                <td>
                    
                      
                    <form action = "Registro_sal.php" method="post">
                        <input type="hidden" name= "f_sal" value= "<?php echo $estudiante->getCodigo();?>" > 
                        <button type = "submit">Salida</button>
                    </form>
                </td>
                 
            </tr>
        </tbody>         
    </table>
    
    
    
</body>
</html>