<?php
    session_start(); 
    if (!empty($_SESSION['email']) && !empty($_SESSION['password'])){
    	header('Location: menu.php'); 
    }  ?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
<form method="post" action="autenticacion.php">

    Email: <input type="mail" value="" name="email" required="true" autofocus placeholder="Ejemplo: usuario@servidor.com"/>
    Clave: <input type="password" value="" name="clave" pattern="[A-Za-z0-9P.$_&]{6,8}" required="true" />
    <input type="submit" value="Enviar datos">
    <input type="reset" value="Restaurar formulario">
</form>
</body>
</html>   
