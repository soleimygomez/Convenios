<?php
  $mysqli = new mysqli('localhost','root','','convenios');
?>

<div style=" width: 90%;background-color: #fff; float: right;">
 <br>
<form action="?controller=tipoConvenio&&action=save" method="POST" class="formuc" style="margin-left:120px;">

<H2 class="from-titulo" style="width:100%;margin-left:13%"> Registrar Tipo de Convenio  </H2>
<div class="imaee">
 
    <img src="../../../assets/imgs/img/tipo.jfif" width="400px" height="200px">
      </div>
    <div class="otraa">
     
     <br>
    <div class="inputs"><br>
    <br>
       <input type="text" name="id" placeholder="Referencia de tipo" required="">
       <input type="text" name="descripcion" placeholder="Descripcion" required="" >
        <br><br><br>
        <input type="submit" value="Registrar" class="btn-registroG" style="margin-left: 35%;"></center> 

    </div>
      
  </div>
 </form>
</div>