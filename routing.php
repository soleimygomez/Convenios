<?php 

$controllers=array(
	'usuario'=>['index','register','save','show','updateshow','update','delete','search','error'],
	'institucion'=>['index','register','save','show','updateshow','update','delete','search','error'],
	'convenio'=>['index','register','save','show','updateshow','update','delete','search','error'],
	'tipoConvenio'=>['index','register','save','show','updateshow','update','delete','search','error'],

);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		echo '<script>
		 
		swal("Error");
         location.href="ir-registro.php";
        </script>';
		call('usuario','error');
		call('convenio','error');
		call('institucion','error');
		call('tipoConvenio','error');
		
		
	}		
}else{
	
	call('usuario','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {


		case 'institucion':
		require_once('Model/institucion.php');
		require_once('Model/Usuarios.php');
		$controller= new InstitucionController();
		break;
        
        case 'convenio':
		require_once('Model/Convenio.php');
		$controller= new ConvenioController();
		break;
        
        case 'tipoConvenio':
			require_once('Model/TipoConvenio.php');
			$controller= new TipoConvenioController();
			break;
			
        


		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>