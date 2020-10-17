<?php 
include "funciones.php";
actualizarMascota($_POST['id'],$_POST['nombre'],$_POST['propietario'],$_POST['tipo'],$_POST['genero'],$_POST['estado'],$_POST['fecha_nac']);
header("Location: agregar_mascota.php?actualizado=1");