<?php 
include "funciones.php";
eliminarDoctor($_POST['id'] );
header("Location: agregar_doctor.php?eliminado=1");