
<body class="full-cover-background" style="background-image:url(assets/imgs/icons/fondo.jpg);">
    <div class="form-container" style="width: 700px;" >

                <p> <h2 style=" font-family: Arial; text-align: center; color:black; "> <b>Registro y Control de Convenios Institucionales</b>  </h1> </p>                
                 <figure>
                    <img  class= "logoSession" 
                    style="border-radius:10px;
                           margin-left: 35%; "
                    src="assets/imgs/icons/ufps.png"  alt="ufps" class="img-responsive center-box">
                </figure>

      <form id="login-form" action="Controllers/validar_sesion.php" method="post">
            <!-- Llamado a el router para llamar al metodo -->
            <!-- USUARIO -->
            <input type="hidden" name="solicitud" value="login">
            <div class="group-material-login">
              <input name="usuario" type="text" class="material-login-control" required="" maxlength="15">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
            </div>
            <br>
            <!-- CONTRASEÑA  -->
            <div class="group-material-login">
              <input name="clave" type="password" class="material-login-control" required="" maxlength="30">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <br>
            <!-- TIPO USURAIO -->
            <div class="group-material-login">
            
             
              
               <select name="tipo" class="material-login-control" required="" maxlength="30" style="align:center">
                               <option selected value="0"> Elige un tipo de usuario </option>
                               <option value="1" name="1">Administrador</option> 
                               <option value="2" name="2">Institucion</option>                       
              </select>
               
         
            </div>
        <br>
          <center>  <button class="btn-ingresar" style="align:center" type="submit">INGRESAR </button></center>
           
        </form>
         <br><br>
      </div>

      <div class="pie-container">
        <br>
         <footer>
              <p>Cruces &copy; Todos los derechos reservados.</p>  
               </footer>
      </div>
</body>
