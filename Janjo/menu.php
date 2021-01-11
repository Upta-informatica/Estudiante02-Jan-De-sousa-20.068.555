<?php
    session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header class="page-header bg-img-cover-dash overlay overlay-30" style="background: rgb(1,76,255);background: linear-gradient(90deg, rgba(1,76,255,1) 0%, rgba(0,168,255,1) 100%);">
        <div class="container text-left" style="margin-top: 6rem;">
          <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 tct text-white">Bienvenido</h1>
                <p class="page-header-text text-white mb-0">Estamos para ayudarte</p>
            </div>
          </div>
        </div>              
    </header>

        <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div class="dropdown no-caret">
                    <a class="btn btn-white rounded-pill shadow-lg dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons-outlined mr-2">table_chart</i>Tablas<span class="material-icons-round">keyboard_arrow_down</span></a>
                    
                    <div class="dropdown-menu dropdown-menu-left animated--fade-in-up" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="agregar_doctor.php"><i class="material-icons-round mr-2">groups</i>Doctores</a>
                            <a class="dropdown-item" href="agregar_cliente.php"><i class="material-icons-round mr-2">groups</i>Clientes</a>
                            <a class="dropdown-item" href="agregar_mascota.php"><i class="material-icons-round mr-2">pets</i>Mascotas</a>
                    </div>
                </div> 
                <div class="ml-2">
                    <a class="btn btn-white rounded-pill shadow-lg" href="#" ><i class="material-icons-outlined mr-2">account_tree</i>Procesos</a>    
                </div>
                <div class="ml-2">
                    <a class="btn btn-white rounded-pill shadow-lg" href="#" ><i class="material-icons-outlined mr-2">report</i>reportes</a>    
                </div>
                <div style="float: right;right: 0;margin-left: auto;">
                    <a class="btn btn-white rounded-pill shadow-lg" href="Salir.php" ><i class="material-icons-outlined mr-2">cancel</i>Salir</a>    
                </div>        
            </div>
        </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>