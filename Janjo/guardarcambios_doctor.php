<?php 
include "funciones.php";
actualizarDoctor($_POST['id'],$_POST['nombre_completo'],$_POST['direccion'],$_POST['telefono']);
header("Location: agregar_doctor.php?actualizado=1");