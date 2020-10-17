<?php 
include "funciones.php";
insertarDoctor($_POST['nombre_completo'],$_POST['direccion'],$_POST['telefono']);
header("Location: agregar_doctor.php?insertado=1");
