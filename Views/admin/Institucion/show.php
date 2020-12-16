
 

      <div style=" width: 90%;background-color: #fff; float: right;">
 <br>
            <div class="register">
            <a href="ir-registro.php" style="text-decoration: none; color:black;" >
                <img src="../../../assets/imgs/icons/add.png" width="8%" heigth="8%">
                Registrar Institucion
            </a>
            </div>
           <center>
       <table > <h2> Lista de Institucion </h2>
            <thead>
                <tr style="text-align: center;">
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Cedula</th>
                    <th>Telefono</th>
            
                   
                    <th>Accion</th>
                </tr>
                <tbody>
                    <?php foreach ($listaInstitucion as$institucion) { ?>
                       
                    
                    <tr>
                        <th scope="row"> <?php echo $institucion->getNombre();      ?> </td>
                       
                        <td> <?php echo $institucion->getDireccion();   ?> </td>
                        <td> <?php echo $institucion->getCedula();      ?> </td>
                        <td> <?php echo $institucion->getTelefono();    ?> </td>
                    
                        
                        <td>
                            <a class="btn btn-success" href="?controller=institucion&&action=updateshow&&cedula=<?php echo $institucion->getCedula() ?>">
                                    Editar
                            </a>| 
                            <a class="btn btn-danger" href="?controller=institucion&&action=delete&&cedula=<?php echo $institucion->getCedula() ?>">
                                        Eliminar
                            </a> 
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </thead>
        </table>
        </center>

    </div>  
<div>






