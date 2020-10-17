<?php  include('funciones.php'); 
$propietarios = listarClientes();
 ?><!DOCTYPE html><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<div id="nuevo2" style="display: none;">
    <a id="nuevolink2" onclick="this.parentNode.style.display='none';document.querySelector('#nuevolink2').style.display='block';"></a>
    <form action="insertar_mascota.php" method="post"  >
        <label for="nombre">Nombre<br></label><input required="required" type="text" name="nombre" id="nombre"><br/><br>
        <label for="direccion">Propietario<br></label> 
<select name="propietario" required>
    <option value="">Seleccione un Cliente</option>
    <?php if(count($propietarios)) foreach($propietarios as $value){ 
        echo '<option value="'.$value->id.'">'.$value->nombre_completo.'</option>';
     } ?>
</select>
        <br/><br>
        <label>Tipo<br></label><input required="required" type="radio" name="tipo" id="tipo_perro" value="p"> <label for="tipo_perro">Perro</label><input required="required" type="radio" name="tipo" id="tipo_gato" value="g"><label for="tipo_gato">Gato</label> <br/><br>
        <label>Genero<br></label><input required="required" type="radio" name="genero" id="genero_masculino" value="v"> <label for="genero_masculino">Masculino</label><input required="required" type="radio" name="genero" id="genero_femenino" value="h"><label for="genero_femenino">Femenino</label> <br/><br>
        <label>Estado<br></label><input required="required" type="radio" name="estado" id="estado_vivo" value="v"> <label for="estado_vivo">Vivo</label><input required="required" type="radio" name="estado" id="estado_muerto" value="m"><label for="estado_muerto">Muerto</label> <br/><br>
        <label for="nombre">Fecha de Nacimiento<br></label><input required="required" type="date" name="fecha_nac" id="fecha_nac"><br/><br>
        <input type="submit" name="boton" value="Enviar">
    </form>
</div>
<a id="nuevolink2" onclick=" document.querySelector('#nuevo2').style.display='block'";>Agregar Mascotas</a>
<h1>Registro de Mascotas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nombre Propietario</th>
                <th>Tipo</th>
                <th>Genero</th>
                <th>Estado</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha Agregado</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $l = listarMascotas();
                if($l && count($l)){
                    foreach ($l as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value->nombre; ?></td>
                    <td><?php echo $value->nombre_completo; ?></td>
                    <td><?php echo $value->tipo=='p'? 'Perro':'Gato'; ?></td>
                    <td><?php echo $value->genero=='v'? 'Macho':'Hembra'; ?></td>
                    <td><?php echo $value->estado=='v'? 'Bibo':'Muerto'; ?></td>
                    <td><?php echo date("d/m/Y",strtotime($value->fecha_nac)); ?></td>
                    <td><?php echo date("d/m/Y h:i:s a",strtotime($value->fecha_add)); ?></td>
                    <td><a href="modificar_mascota.php?id=<?php echo $value->id; ?>">Modificar</a></td>
                    <td><a onclick="document.forms.doctor_<?php echo $value->id; ?>.submit();">Eliminar</a>
<form name="doctor_<?php echo $value->id; ?>" action="eliminar_mascota.php" method="post"><input type="hidden" name="id" value="<?php echo $value->id; ?>"></form>
                    </td>
                </tr>
                <?php
                    }
                }
             ?>
        </tbody>
    </table>
<style type="text/css">
    th{
            background: pink;
    color: white;
    font-weight: bold;
    font-family: 'Oswald', sans-serif;
    padding: .5em;
    }

    tbody tr:nth-child(2n) td{
        background:white;
        font-family: 'Oswald', sans-serif;
    }

    tbody tr:nth-child(2n+1) td{
        background:pink;
        padding: .25em;
        font-family: 'Oswald', sans-serif;
    }
</style>
</html>