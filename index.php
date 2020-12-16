<?php 
  require_once('Controllers/db/connection.php');
  if (isset($_GET['controller'])&&isset($_GET['action'])) {
    
    $controller=$_GET['controller'];
    $action=$_GET['action'];
  }else{
    
   $controller='granja';
    $action='index';
  }
  require_once('Views/inicio-sesion.php');  
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="Login" content="">
    <meta name="Author" content="Eduardo Cruces">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css"/>
    <script src="assets/js/sweet-alert.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>

<body>
  
  
</body>
  <!-- <script>
    const btn =document.querySelector('#menu-btn');
    const menu=document.querySelector('#sidemenu');
    btn.addEventListener('click',e =>{
      menu.classList.toogle("menu-expanded");
      menu.classList.toogle("menu-collapsed");
      document.querySelector('body').classList.toogle('body-expanded');
    });
  </script> -->
</html>


