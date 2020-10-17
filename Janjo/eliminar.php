<?php 
include "funciones.php";
eliminarCliente($_POST['id'] );
header("Location: agregar_cliente.php?eliminado=1");