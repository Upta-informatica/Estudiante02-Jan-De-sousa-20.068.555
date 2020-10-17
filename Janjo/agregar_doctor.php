<!DOCTYPE html>
<div id="nuevo2" style="display: none;">
    <a id="nuevolink2" onclick="this.parentNode.style.display='none';document.querySelector('#nuevolink2').style.display='block';"></a>
    <form action="insertar_doctor.php" method="post"  >
        <label for="nombre">Nombre<br></label><input required="required" type="text" name="nombre_completo" id="nombre"><br/><br>
        <label for="direccion">Direccion<br></label><input required="required" type="text" name="direccion" id="direccion"><br/><br>
        <label for="nombre">Telefono<br></label><input required="required" type="text" name="telefono" id="telefono"><br/><br>
        <input type="submit" name="boton" value="Enviar">
    </form>
</div>
<a id="nuevolink2" onclick=" document.querySelector('#nuevo2').style.display='block'";>Agregar</a>
<h1>Registro de Doctores</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php include('funciones.php');
                $l = listarDoctores();
                if($l && count($l)){
                    foreach ($l as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value->nombre_completo; ?></td>
                    <td><?php echo $value->direccion; ?></td>
                    <td><?php echo $value->telefono; ?></td>
                    <td><a href="modificar_doctor.php?id=<?php echo $value->id; ?>">Modificar</a></td>
                    <td><a onclick="document.forms.doctor_<?php echo $value->id; ?>.submit();">Eliminar</a>
<form name="doctor_<?php echo $value->id; ?>" action="eliminar_doctor.php" method="post"><input type="hidden" name="id" value="<?php echo $value->id; ?>"></form>
                    </td>
                </tr>
                <?php
                    }
                }
             ?>
        </tbody>
    </table>

</html>