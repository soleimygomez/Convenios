<?php
  $mysqli = new mysqli('localhost','root','','convenios');
?>
<div style=" width: 90%;background-color: #fff; float: right;">
 <br>
    <form action="?controller=institucion&&action=save"  method="POST" class="formuc" style="margin-left:120px;" enctype="multipart/form-data" >

    <H2 class="from-titulo" style="width:100%;margin-left:13%"> Registrar Institucion </H2>

    <div class="imae">
      <br><br><br>
      <img src="../../../assets/imgs/img/ins.jpg" width="400px" height="300px">
      </div>
    <div class="otra">
    <br>
    <center> <h3  >Datos Institucionales</h3> </center>
                      <div class="inputs">     <!-- INICIO DE INPUTS -->
    

                         
                   
                        <input type="text" name="nombre" placeholder="Nombre de la Institucion" required="">
                       

                        <input type="text" name="cedula" placeholder="Nit" required="">
                        <input type="text" name="direccion" placeholder="Direccion de la Institucion" required="">
                        <input type="text" name="telefono" placeholder="telefono" required="" >
                     </div>
                       <center> <h3>Registro de Usuarios</h3></center> <br>
                       <div class="inputs">
                        <input type="text" name="usuario" placeholder="Usuario" required size="7">
                        <input type="text" name="clave" placeholder="Clave" required="" size="7" >
                         

                   
                        

                     
                            <div  style="background:#E3E2D3;
                                          color:#0C0C0C;
                                          padding: 10px;
                                          width: 210px;
                                          height: 50px;
                                          border:none; 
                                          font-size: 20px;
                                          box-shadow: 0 5px 25px rgba(201, 200, 187);"> 
                                <select name="tipo" style="background:#E3E2D3;
                                                              color:#0C0C0C;
                                                              padding: 10px;
                                                              width: 210px;
                                                              height: 50px;
                                                              border:none; 
                                                              font-size: 20px;
                                                              box-shadow: 0 5px 25px rgba(201, 200, 187);" >
                                    <option name="tipo"  value="0">tipo de usuario:</option>
                                    <option  name="tipo" value="1">Administrador</option>  
                                    <option name="tipo" value="2">Institucion</option> 
                                </select>
                            </div>
                      
                                         
                                    
                         

                         <input   type="submit" value="Registrar" class="btn-registroG">

     <div>                


                   

            

 

    </form>

  </div>

  
</div>






