

<br>
<br>

 <div style=" width: 90%;background-color: #fff; float: right;">
 <br> 		<div class="register">
            <a href="ir-registro.php" style="text-decoration: none; color:black;" >
                <img src="../../../assets/imgs/icons/add.png" width="8%" heigth="8%">
                Registrar Convenio
            </a>
            </div>
           <center>
       <table  > <h2> Lista de Convenio </h2>
            <thead>
                <tr style="text-align: center;">

                <th>Id</th>
                <th>Inicio</th>
                <th>Terminacion</th>
                <th>Nombre</th>
				<th>Tipo Convenio</th>
				<th>Institucion</th>
				<th>Documento del Convenio</th>
                <TH>Accion</TH>
                
            </tr> 
        </thead>
        <tbody>
					<?php foreach ($listaConvenios as$convenio) {?>

					
					<tr>
						<th scope="row"><?php echo $convenio->getId(); ?></td>
						<td><?php echo $convenio->getFechaInicio(); ?></td>
						<td><?php echo $convenio->getFechaFin() ?></td>
						<td><?php echo $convenio->getNombre() ?></td>
						<td><?php echo $convenio->getTipoConvenio() ?></td>
						<td><?php echo $convenio->getInstitucion() ?></td>
						<td><?php echo $convenio->getDocumento() ?></td>
						<td>
							 <a class="btn btn-success" href="?controller=convenio&&action=updateshow&&id=<?php 
									echo $convenio->getId() ?>">
                                    Editar
                            </a>| 
                            <a class="btn btn-danger" href="?controller=convenio&&action=delete&&id=<?php 
                            		echo $convenio->getId() ?>">
                                      Eliminar
                            </a> 
							 
						</td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>
</div>










