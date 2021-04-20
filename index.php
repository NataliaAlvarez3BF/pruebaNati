<?php
include 'personas.php';
$indice = 10;
foreach ($Personas as &$persona) {
    echo '<a href="datos.php?persona='. $indice .'">' .$persona->NombreYApellido()."</a>";
    $indice++;
}
