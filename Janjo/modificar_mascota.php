<?php
    session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
        require("funciones.php");
        $value = buscarMascota($_GET['id']); 
$propietarios = listarClientes();
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
        <form action="guardarcambios_mascota.php" method="post"  >
        <input type="hidden" name="id" value="<?php echo $value->id; ?>">
        <label for="nombre">Nombre<br></label><input required="required" value="<?php echo $value->nombre; ?>" type="text" name="nombre" id="nombre"><br/><br>
        <label for="direccion">Propietario<br></label> 
<select name="propietario" required>
    <option value="">Seleccione un Cliente</option>
    <?php if(count($propietarios)) foreach($propietarios as $p){ 
        echo '<option value="'.$p->id.'" '.($value->propietario == $p->id ? 'selected':'').'>'.$p->nombre_completo.'</option>';
     } ?>
</select>
        <br/><br>
        <label>Tipo<br></label><input required="required" type="radio" name="tipo" id="tipo_perro" value="p" <?php echo $value->tipo == 'p' ? 'checked':'' ?> > <label for="tipo_perro">Perro</label><input required="required" type="radio" name="tipo" id="tipo_gato" value="g" <?php echo $value->tipo == 'g' ? 'checked':'' ?>><label for="tipo_gato">Gato</label> <br/><br>
        <label>Genero<br></label><input required="required" type="radio" name="genero" id="genero_masculino" value="v"  <?php echo $value->genero == 'v' ? 'checked':'' ?>> <label for="genero_masculino">Masculino</label><input  <?php echo $value->genero == 'h' ? 'checked':'' ?> required="required" type="radio" name="genero" id="genero_femenino" value="h"><label for="genero_femenino">Femenino</label> <br/><br>
        <label>Estado<br></label><input required="required"  <?php echo $value->estado == 'v' ? 'checked':'' ?> type="radio" name="estado" id="estado_vivo" value="v"> <label for="estado_vivo">Vivo</label><input  <?php echo $value->estado == 'm' ? 'checked':'' ?> required="required" type="radio" name="estado" id="estado_muerto" value="m"><label for="estado_muerto">Muerto</label> <br/><br>
        <label for="nombre">Fecha de Nacimiento<br></label><input value="<?php echo $value->fecha_nac; ?>" required="required" type="date" name="fecha_nac" id="fecha_nac"><br/><br>
        <input type="submit" name="boton" value="Enviar">
    </form>
</div>
 
        </tbody>
    </table>

</body>
</html>