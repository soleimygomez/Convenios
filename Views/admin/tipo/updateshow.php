<?php
  $mysqli = new mysqli('localhost','root','','convenios');
?>

<div style=" width: 90%;background-color: #fff; float: right;">
 <br>
<form action="?controller=tipoConvenio&&action=update" method="POST" class="formuc" style="margin-left:120px;">

<H2 class="from-titulo"> 
            <a href="ir-tabla.php" class="btn btn-info" 
                            style="float: left; 
                                   background: white;
                                   color: black;                  
                                   ">volver</a> Actualizar datos del tipo de convenio </H2>
    <div class="imaee">
    <img src="../../../assets/imgs/img/tipo.jfif" width="400px" height="200px">
      </div>
    <div class="otraa">
     
     <br>
        <div class="inputs">
    
            <input type="text" name="id" placeholder="ID Galpon" required="" value=" <?php echo $tipoConvenio->getId();   ?>" >
            
            <input type="text" name="descripcion" placeholder="Linea Genetica" required="" value="<?php echo $tipoConvenio->getDescripcion() ?>">

            <br><br><br>
             <input type="submit" value="Actualizar" class="btn-registroG" style="margin-left: 30%;">

        </div>
    </div>
 </form>
</div>