
<div style=" width: 90%;background-color: #fff; float: right;">
 <br>
<form action="?controller=convenio&&action=update"  method="POST" class="formuc"style="margin-left:120px;" >
<H2 class="from-titulo"> Actualizar Convenios </H2>
            <a href="ir-tabla.php" class="btn btn-info" 
                            style="float: left; 
                                   background: white;
                                   color: black;                  
                                   ">volver</a> Actualizar Datos de Granja </H2>
        <div class="imae">
                <br><br><br><br>
                <img src="../../../assets/imgs/img/convenios.jpg" width="400px" height="300px">
                </div>
        <div class="otra">

        <div class="inputs">
                <input type="text" name="id"
                     value="<?php echo $convenio->getId() ?>"  placeholder="id De la Granja"  required="" class="N">

                <input type="date" name="fecha_inicio" value="<?php echo $convenio->getFechaInicio() ?>"
                     placeholder="Nombre De la Granja"  required="" class="N">

                <input type="text" name="fecha_fin" value="<?php echo $convenio->getFechaFin(); ?>" placeholder="Direccion" 
                       required="" class="N">

                <input type="text" name="nombre" value="<?php echo $convenio->getNombre(); ?>" placeholder="TelefonoG"
                       required="" class="N">

                <input type="text" name="tipo_convenio" value="<?php echo $convenio->getTipoConvenio(); ?>"
                        
                         required="" class="N">
                <input type="text" name="documento" value="<?php echo $convenio->getDocumento(); ?>"
                        
                         required="" class="N">
                <input type="text" name="institucion" value="<?php echo $convenio->getInstitucion(); ?>"
                         
                         required="" class="N">
             
         
                 <input type="submit" value="Actualizar" class="btn-registroG" style="margin-left: 53%;">

        </div>

 </form>
</div>
