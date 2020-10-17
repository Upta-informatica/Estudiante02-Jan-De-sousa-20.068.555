<?php

?>
<!DOCTYPE html>
<html lang="sp">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<input type="text" name="localhost" value="localhost" placeholder="Entre nombre de servidor" minlength="5" maxlength="10" />		
<input type="text" name="puerto" value="puerto"  required="true" placeholder="Entre número de puerto" pattern"[0-9]{4}" />
<input type="text" name="usuario" value="usuario" required="true" placeholder="Entre usuario" pattern="[a-zA-Z0-9]+" />
<input type="password" name="password" value="" required="true" placeholder="Entre clave" />
<input type="text" name="basededatos" value="" required="true" placeholder="Entre nombre de base de datos" />
<input type="submit" name="enviar" value="Enviar">
</body>
</html>
