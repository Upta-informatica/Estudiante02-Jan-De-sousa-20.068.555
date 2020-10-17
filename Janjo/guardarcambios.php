<?php 
include "funciones.php";
actualizarCliente($_POST['id'],$_POST['nombre_completo'],$_POST['direccion'],$_POST['telefono']);
header("Location: agregar_cliente.php?actualizado=1");