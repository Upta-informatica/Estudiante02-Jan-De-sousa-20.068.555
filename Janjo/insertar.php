<?php 
include "funciones.php";
insertarCliente($_POST['nombre_completo'],$_POST['direccion'],$_POST['telefono']);
header("Location: agregar_cliente.php?insertado=1");
