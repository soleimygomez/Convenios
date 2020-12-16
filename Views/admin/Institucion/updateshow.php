
<div style=" width: 90%;background-color: #fff; float: right;">
 <br>
    <form action="?controller=institucion&&action=update"  method="POST" class="formuc" style="margin-left:120px;">
        <H2 class="from-titulo"> Actualizar Institucion </H2>

        <div class="imae">
        <br><br><br>
        <img src="../../../assets/imgs/img/ins.jpg" width="400px" height="300px">
        </div>
        <div class="otra">
        <br>
        <center> <h3  >Datos Institucionales</h3> </center>
                <div>
                    
                         <input type="text" name="nombre" placeholder="Nombre" required="" value="<?php echo $institucion->getNombre() ?>">
                        <input type="text" name="cedula" placeholder="cedula" required="" value="<?php echo $institucion->getCedula(); ?>" disable="">
                        <input type="text" name="direccion" placeholder="direccion" required="" value="<?php echo $institucion->getDireccion(); ?>">
                         <input type="text" name="telefono" placeholder="telefono" required="" value="<?php echo $institucion->getTelefono(); ?>">
                     

                     
                            <div   style="margin-left:280px;margin-top:-40px"> 
                                <select name="tipo" style="background:#E3E2D3;
                                                              color:#0C0C0C;
                                                              padding: 10px;
                                                              width: 210px;
                                                              height: 50px;
                                                              border:none; 
                                                              font-size: 20px;
                                                              box-shadow: 0 5px 25px rgba(201, 200, 187);" >
                                     <option  name="tipo" value="1">Administrador</option>  
                                    <option name="tipo" value="2">Institucion</option> 
                                </select>
                            </div>
                      
                         <br>
                         <input   type="submit" value="Actualizar" class="btn-registroG">
                         </div>
          </div>           


          </form>            

            

</div>





  
</div>






