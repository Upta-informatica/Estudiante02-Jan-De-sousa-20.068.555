<?php
    session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
        require("funciones.php");
        $value = buscarCliente($_GET['id']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<div id="nuevo"  >
    <a id="nuevolink" onclick="this.parentNode.style.display='none';document.querySelector('#nuevolink').style.display='block';">Esconder</a>
    <form action="guardarcambios.php" method="post"  >
        <input type="hidden" name="id" value="<?php echo $value->id; ?>">
        <label for="nombre">Nombre</label><input required="required" type="text" value="<?php echo $value->nombre_completo; ?>" name="nombre_completo" id="nombre"><br/> 
        <label for="direccion">Direccion</label><input required="required" type="text" value="<?php echo $value->direccion; ?>" name="direccion" id="direccion"><br/> 
        <label for="nombre">Telefono</label><input required="required" type="text" value="<?php echo $value->telefono; ?>" name="telefono" id="telefono"><br/> 
        <input type="submit" name="boton" value="Enviar">
    </form>
</div>
 
        </tbody>
    </table>

</body>
</html>