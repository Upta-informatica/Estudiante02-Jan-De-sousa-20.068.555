<?php
    session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul id="menu">
    <li>Inicio</li>
    <li><a>Tablas</a>
        <ul>
            <li><a href="agregar_doctor.php">Doctores</a></li>
            <li><a href="agregar_cliente.php">Clientes</a></li>
            <li><a href="agregar_mascota.php">Mascotas</a></li>
        </ul>
    </li>
    <li>Procesos</li>
    <li>Reportes</li>
    <li><a href="salir.php">Salida</a></li>
    </ul>
<style type="text/css">
    #menu{
        list-style-type: none;
    display: flex;
    background: #e91e63;
    color: #fff;
    font-family: Arial;
    align-items: center;
    justify-content: space-around;
    min-height: 40px;
    }

    #menu ul{
        display: none;
        list-style-type: none;
        min-width: 200px;
    }
    #menu >  li{
        position: relative;
    display: flex;
    min-height: 40px;
    align-items: center;
    }

    #menu > li:hover ul{
        display: block;   
    background: #e91e63;
    color: #fff;
    position: absolute;
    top:26px;
    left: 0;
    padding: 1em;

    }
#menu > li:hover ul li{
    margin-bottom: .5em;
}
    #menu > li:hover ul li a{
        color: #fff;
        text-decoration: none;
    }
    #menu > li:hover ul li a:hover{
        font-weight: 700;
    }
</style>
</body>
</html>