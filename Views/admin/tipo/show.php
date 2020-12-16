
 

  <div style=" width: 90%;background-color: #fff; float: right;">
 <br>
            <div class="register">
            <a href="ir-registro.php" style="text-decoration: none; color:black;" >
                <img src="../../../assets/imgs/icons/add.png" width="8%" heigth="8%">
                Registrar Tipo de Convenio
            </a>
            </div>
 
 <center>  
       <table > <h2> Lista de Tipos de convenios </h2>
            <thead>
                <tr  style="text-align: center;">
                    <th>id</th>
					
					<th>Descripcion</th>
					
                    <th>Accion</th>
                </tr>
                <tbody>
                    <?php foreach ($listaTipoConvenio as$tipoConvenio) {?>

                    
                    <tr>
                        <th  scope="row"> <?php echo $tipoConvenio->getId();   ?> </td>
                        <td> <?php echo $tipoConvenio->getDescripcion();   ?> </td>
                        
                        <td>
                            <a class="btn btn-success" href="?controller=tipoConvenio&&action=updateshow&&id=<?php 
                                echo $tipoConvenio->getId() ?>">Editar
                            </a>

                            <a class="btn btn-danger"  href="?controller=tipoConvenio&&action=delete&&id=<?php 
                                echo $tipoConvenio->getId() ?>">Eliminar
                            </a>
                         </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </thead>
        </table></center>

    </div>  
<div>






