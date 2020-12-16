<?php

include_once('../../../controllers/db/conexion.php');
 
session_start();


//Restringir acceso sin haberse logueado
if (isset($_SESSION['usuario'])) {
} else {
    
   echo '<SCRIPT LANGUAJE="javascript">
          location.href = "../../index.php";
</script>';
   exit;
 }
include_once('../../../controllers/db/variables-sesion.php');
?>
  

 
 
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="../../../assets/css/sweet-alert.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/tipo-de-letra.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
        <link rel="stylesheet" href="../../../assets/css/login.css"/>
    <script src="../../../assets/js/sweet-alert.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/main.js"></script>
</head>
<body> 
   <div id="sidemenu" class="menu-collapsed">
   <!-- HEADER -->
   <br>
        <div id="header">
            <div id="title"><span>INGENIERIA DE SISTEMAS</span></div>
            <br>
        </div>
    
    <!-- PROFILE -->

        <div id="profile">
            <div id="photo"><img src="../../../assets/imgs/icons/ufps.png" alt=""></div>
            <div id="name"><span>Registro de Convenios Institucionales</span></div>
        </div>
    <!-- ITEMS -->
    <div id="menu-items">

         <div class="item">
            <a href="../inicio.php">
                <div class="icon"><img src="../../../assets/imgs/icons/home.png"></div>
                <div class="title">Inicio</div>
            </a>
        </div>
        <div class="item separator">
             
        </div>
        <div class="item">
            <a href="../Institucion/ir-tabla.php">
                <div class="icon"><img src="../../../assets/imgs/icons/inti.png"></div>
                <div class="title">Instituciones</div>
            </a>
        </div>
        <div class="item separator">
             
        </div>
        <div class="item">
            <a href="../Convenio/ir-tabla.php">
                <div class="icon"><img src="../../../assets/imgs/icons/conven.png"></div>
                <div class="title">Convenios</div>
            </a>
        </div>
        <div class="item separator">
             
             </div>
        <div class="item">
            <a href="ir-tabla.php">
                <div class="icon"><img src="../../../assets/imgs/icons/tipo.png"></div>
                <div class="title">Tipos de Convenios</div>
            </a>
        </div>
    </div>
   </div>
    
       <nav  >
            <ul  >
                <figure >
                   <img src="../../../assets/imgs/img/users.png" alt="Usuario" width="50%" height="50%">
                </figure>
                <li style="color: white ;cursor:default; 
                font-family: comic sans MS; 
                text-align: center; margin-left:55%;margin-top:2%; ">
                    <span > <?php echo $usuario  ?></span>
                </li>
                 

                <li  class="tooltips-general exit-system-button "style="color: white; margin-left:88%;margin-top:-40px;"  data-href="../../../controllers/cerrar-sesion.php" data-placement="bottom" title="Cerrar Sesion">
                 <img src="../../../assets/imgs/icons/session.png" alt="Usuario" width="30%" height="30%">
                </li>               
               


                <li  class="tooltips-general btn-help" style="color: white;  margin-left:70%;margin-top:-40px; " data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                     <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div>

        <br>
            <?php require_once('../../../routing.php'); ?>

        </div>

        <div class="footer-copyright full-reset">TDG &copy; Todos los derechos reservados.</div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp" style= "background-color:#c62828;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    No Disponible La Ayuda 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; Aceptar</button>
                </div>
            </div>
          </div>
        </div>
       

</body>
</html>
