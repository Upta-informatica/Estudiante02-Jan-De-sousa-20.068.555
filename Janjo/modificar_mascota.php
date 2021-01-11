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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Mascota</title>
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
                <h1 class="display-4 tct text-white">Modificar Mascota</h1>
                <i class="material-icons-round icon-head">pets</i>
            </div>
          </div>
        </div>              
    </header>

        <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div style="float: right;right: 0;margin-left: auto;">
                    <a class="btn btn-white rounded-pill shadow-lg" href="agregar_mascota.php" ><i class="material-icons-outlined mr-2">keyboard_arrow_left</i>Volver</a>    
                </div>        
            </div>
        </div>

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4 mb-4">
        <div class="card card-bor mb-4" style="margin-top: -10rem;">
           <div class="card-body">
          <form action="guardarcambios_mascota.php" method="post"> 
            <input type="hidden" name="id" value="<?php echo $value->id; ?>">
              <fieldset>
                <div class="form-group row">
                  <div class="col-12">
                    <label for="nombre"><strong>Nombre</strong></label>
                    <input class="form-control" required="required" type="text" value="<?php echo $value->nombre; ?>" name="nombre" id="nombre">               
                  </div>
                  <div class="col-12">
                    <label for="propietario"><strong>Propietario</strong></label>
                      <select class="form-control custom-select form-control-solid" name="propietario" required>
                        <option value="">Seleccione un Cliente</option>
                        <?php if(count($propietarios)) foreach($propietarios as $p){ 
                            echo '<option value="'.$p->id.'" '.($value->propietario == $p->id ? 'selected':'').'>'.$p->nombre_completo.'</option>';
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
                    <input type="date" class="form-control" value="<?php echo $value->fecha_nac; ?>" name="fecha_nac" id="fecha_nac" required>            
                  </div>
                </div>
              </fieldset> 
        </div>

          <div class="card-footer tct text-right">
            <button type="submit" class="btn btn-blue">Cambiar</button>
          </form>        
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
