<?php 
include "funciones.php"; 
insertarMascota($_POST['nombre'],$_POST['propietario'],$_POST['tipo'],$_POST['genero'],$_POST['estado'],$_POST['fecha_nac']);
header("Location: agregar_mascota.php?insertado=1");
