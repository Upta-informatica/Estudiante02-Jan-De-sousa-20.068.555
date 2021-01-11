<?php
    session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
?>
<?php   include('funciones.php'); 
        $propietarios = listarClientes();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header class="page-header bg-img-cover-dash overlay overlay-30" style="background: rgb(1,76,255);background: linear-gradient(90deg, rgba(1,76,255,1) 0%, rgba(0,168,255,1) 100%);">
        <div class="container text-left" style="margin-top: 6rem;">
          <div class="row">
            <div class="col-lg-12">
                <h1 class="display-4 tct text-white">Mascotas</h1>
                <i class="material-icons-round icon-head">pets</i>
            </div>
          </div>
        </div>              
    </header>

        <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div style="float: right;right: 0;margin-left: auto;">
                    <a class="btn btn-white rounded-pill shadow-lg mr-2" href="#!" data-toggle="modal" data-target="#modal" ><i class="material-icons-outlined mr-2">add</i>Agregar</a>
                    <a class="btn btn-white rounded-pill shadow-lg" href="menu.php" ><i class="material-icons-outlined mr-2">keyboard_arrow_left</i>Volver</a>    
                </div>        
            </div>
        </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title tct"><strong>Nueva Mascota</strong></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
          </div>
        <div class="modal-body">
          <form action="insertar_mascota.php" method="post"> 
              <fieldset>
                <div class="form-group row">
                  <div class="col-12">
                    <label for="nombre"><strong>Nombre</strong></label>
                    <input class="form-control" required="required" type="text" name="nombre" id="nombre">               
                  </div>
                  <div class="col-12">
                    <label for="propietario"><strong>Propietario</strong></label>
                      <select class="form-control custom-select form-control-solid" name="propietario" required>
                        <option value="">Seleccione un Cliente</option>
                        <?php if(count($propietarios)) foreach($propietarios as $value){ 
                            echo '<option value="'.$value->id.'">'.$value->nombre_completo.'</option>';
                         } ?>
                      </select>          
                  </div>
                  <div class="col-12">
                    <label>Tipo</label>
                      <select class="form-control custom-select form-control-solid" name="tipo" required>
                        <option value="">seleccionar</option>
                        <option value="p">Perro</option>
                        <option value="g">Gato</option>
                      </select>              
                  </div>
                  <div class="col-12">
                    <label>Genero</label>
                      <select class="form-control custom-select form-control-solid" name="genero" required>
                        <option value="">seleccionar</option>
                        <option value="v">Macho</option>
                        <option value="h">Hembra</option>
                      </select>              
                  </div>
                  <div class="col-12">
                    <label>Estado</label>
                      <select class="form-control custom-select form-control-solid" name="estado" required>
                        <option value="">seleccionar</option>
                        <option value="v">Vivo</option>
                        <option value="m">Muerto</option>
                      </select>              
                  </div>
                  <div class="col-12">
                    <label>Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" required>            
                  </div>
                </div>
              </fieldset> 
        </div>

          <div class="modal-footer tct">
            <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal"><strong>Cancelar</strong></button>
            <button type="submit" class="btn btn-success">Agregar</button>
          </form>        
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 mb-4">
        <div class="card card-bor mb-4" style="margin-top: -10rem;">
                  <div class="datatable table-responsive">
                      <table class="table table-hover" width="100%">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Nombre Propietario</th>
                            <th>Tipo</th>
                            <th>Genero</th>
                            <th>Estado</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Fecha Agregado</th>
                            <td align="right"><strong>Acciones</strong></td>
                          </tr>
                        </thead>
                        <?php                       
                            $l = listarMascotas();
                            if($l && count($l)){
                            foreach ($l as $key => $value) {
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $value->nombre; ?></td>
                            <td><?php echo $value->nombre_completo; ?></td>
                            <td><?php echo $value->tipo=='p'? 'Perro':'Gato'; ?></td>
                            <td><?php echo $value->genero=='v'? 'Macho':'Hembra'; ?></td>
                            <td><?php echo $value->estado=='v'? 'Bibo':'Muerto'; ?></td>
                            <td><?php echo date("d/m/Y",strtotime($value->fecha_nac)); ?></td>
                            <td><?php echo date("d/m/Y h:i:s a",strtotime($value->fecha_add)); ?></td>
                            <td align="right">

                            <a class="btn btn-sm tct text-white bg-secondary rounded-pill lift-img-X-l" title="Editar: <?php echo $value->nombre; ?>" href="modificar_mascota.php?id=<?php echo $value->id; ?>"><i class="material-icons-round">create</i>Editar</a>
                            
                            <a class="btn btn-sm tct text-white bg-danger rounded-pill" title="Eliminar: <?php echo $value->nombre?>" onclick="document.forms.doctor_<?php echo $value->id; ?>.submit();"><i class="material-icons-round">delete</i>Eliminar</a>
                            
                            <form name="Mascota_<?php echo $value->id; ?>" action="eliminar_mascota.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $value->id; ?>"></form>
                            </td>              
                          </tr>
                          <?php
                              }
                            }
                          ?>      
                        </tbody>
                      </table>
                  </div>
        </div>
        </div>
      </div>
    </div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/script.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
    