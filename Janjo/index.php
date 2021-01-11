<?php
    session_start(); 
    if (!empty($_SESSION['email']) && !empty($_SESSION['password'])){
        header('Location: menu.php'); 
    }  
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
        <div class="container text-left" style="margin-top: 8rem;">
          <div class="row">
            <div class="col-lg-12">
                <h1 class="display-3 tct text-white">Login</h1>
                <i class="material-icons-round icon-head">login</i>
            </div>
          </div>
        </div>              
    </header>

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4 mb-4">
        <div class="card card-bor mb-4" style="margin-top: -5rem;">
           <div class="card-body">
          <form action="autenticacion.php" method="post">
              <fieldset>
                <div class="form-group row">
                  <div class="col-12 mb-2">
                    <label for="email"><strong>Email</strong></label>
                    <input class="form-control" required="required" type="mail" name="email" id="email">               
                  </div>
                  <div class="col-12">
                    <label for="password"><strong>Clave</strong></label>
                    <input class="form-control" required="required" type="password" name="password" id="password">               
                  </div>
                </div>
              </fieldset> 
        </div>

          <div class="card-footer tct text-right" style="border: none;">
            <button type="reset" class="btn btn-transparent-dark rounded-pill"><strong>Limpiar</strong></button>
            <button type="submit" class="btn btn-blue rounded-pill shadow-lg">Entrar</button>
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
