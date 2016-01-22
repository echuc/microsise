<?php
   // Conectar con la  base de datos
$db = new mysqli('localhost', 'root', 'root', 'bdmicrosise');

// En caso de no conectarse a la BD
if($db->connect_errno > 0){
    die('No se puede conectar a la base de datos [' . $db->connect_error . ']');
}

?>