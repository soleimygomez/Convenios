<?php
  $mysqli = new mysqli('localhost', 'root', '', 'convenios');
?>
<div style=" width: 90%;background-color: #fff; float: right;">

 <form action="?controller=convenio&&action=save"  method="POST" class="formuc" style="margin-left:120px;" enctype="multipart/form-data" >

   <H2 class="from-titulo" style="width:100%;margin-left:13%"> Registrar Convenios </H2>

    <div class="imae">
      <br><br><br>
      <img src="../../../assets/imgs/img/convenios.jpg" width="400px" height="300px">
    </div>
    <div class="otra">
      <br>
    <center> <h3  >Datos del Convenio</h3> </center>
      <div class="inputs">



        <input type="text" name="id" placeholder="Numero de convenio">
        <input type="text" name="nombre" placeholder="Nombre  del Convenio" >
        <input name="fecha_inicio" type="date" placeholder="Fecha Inicio">
        <input name="fecha_fin" type="date" placeholder="Fecha Fin">
        <div>
          <select name="tipo_convenio" style="background:#E3E2D3;
                    color:#0C0C0C;
                    padding: 10px;
                    width: 210px;
                    height: 50px;
                    border:none; 
                    font-size: 20px;
                    box-shadow: 0 5px 25px rgba(201, 200, 187);">
            <option value="0">Tipos:</option>

            <?php
            $query = $mysqli->query("SELECT * FROM tipo_convenio");
            while ($valores = mysqli_fetch_array($query)) {
              echo '<option name="id" value="' . $valores['id'] . '">' . $valores['descripcion'] . '</option>';
            }
            ?>
          </select>
          <br>
        </div>
        <br>
        <input type="file" name="archivosubido">
        
      </div>
    </div>

    <div style=" position:absolute;
      top:53%;
      left:1200px;">
      <select name="institucion" style="background:#E3E2D3;
                    color:#0C0C0C;
                    padding: 10px;
                    width: 210px;
                    height: 50px;
                    border:none; 
                    font-size: 20px;
                    box-shadow: 0 5px 25px rgba(201, 200, 187);">
        <option value="0">Institucion:</option>
        <?php
        $sql = "SELECT * FROM institucion";
        $result = $mysqli->query($sql);
        while ($valoress = mysqli_fetch_assoc($result)) {

          echo '<option name="institucion" value="' . $valoress['cedula'] . '">' . $valoress['nombre'] . '</option>';
        }
        ?>
      </select>
    </div>
    <div style="position:absolute;
      top:70%;
      left:1000px;">
      <input type="submit" value="Registrar Convenio" class="btn-registroG">
    </div>
  </form>
</div>




