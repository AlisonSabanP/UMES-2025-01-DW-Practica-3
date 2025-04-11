<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $descripcion = $_POST['descripcion'];
    
    echo "<h2>Gracias por realizar su reservación, $nombre.</h2>";
    echo "<p>Hemos recibido su reservación y nos comunicaremos lo antes posible para confirmar la información.</p>";
    
    if(!is_dir('reservaciones')) {
        mkdir('reservaciones');
    }
    
    $archivo = fopen('reservaciones/reservaciones.txt','a');
    fwrite($archivo, "$nombre,$telefono,$fecha,$hora,$descripcion\n");
    fclose($archivo);
    
    echo "<p>Su reservación ha sido guardada correctamente.</p>";
    echo "<p><a href='reservacion.php'>Volver a Reservar</a></p>";
}
?>