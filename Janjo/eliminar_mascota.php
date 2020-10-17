<?php 
include "funciones.php";
eliminarMascota($_POST['id'] );
header("Location: agregar_mascota.php?eliminado=1");