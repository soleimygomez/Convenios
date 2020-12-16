<?php 

class InstitucionController
{
	
	function __construct()
	{
		
	}
 
	function index(){
		require_once('../../../Views/admin/Institucion/register.php');
	}

	function register(){
		require_once('../../../Views/admin/Institucion/register.php');
	}
 
	function save(){

		$usuarios1 = $_POST['usuario'];
		$usu=usuarios::verificarUsuario($usuarios1);

		$cedula = $_POST['cedula'];
		$institucion1=Institucion::verificarInstitucion($cedula);

		if ($usu and $institucion1) {
		     echo '<script>
		       alert("Usuario o cedula repetidos, por favor intente con otros");
		       location.href="ir-registro.php";
		       </script>';
		}else{
			$usuarios = new usuarios($_POST['usuario'],$_POST['clave'],$_POST['tipo']  );
			 usuarios::save($usuarios); 

			$institucion= new institucion($_POST['nombre'],$_POST['direccion'],$_POST['cedula'],$_POST['telefono'],$_POST['tipo'] );
				Institucion::save($institucion);
				
				echo '<script>
				 
				bootbox.alert("This is the default alert!");
		         location.href="ir-registro.php";
				</script>';
				$this->show();

		}

		
	}




	// function save(){
	// 	if(isset($_POST['usuario']) || isset($_POST['clave']) || isset($_POST['tipo'])) {
	// 	$usuarios = new usuarios($_POST['usuario'],$_POST['clave'],$_POST['tipo']);
	// 	usuarios::save($usuarios); 
	// }
	// 	$granjero= new granjero($_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['cedula'],$_POST['telefono'],$_POST['tipo'] );
	// 	Granjero::save($granjero);
	// 	echo '<script>
 //        alert("Regsitrado corrctamente");
 //         location.href="ir-registro.php";
 //        </script>';
	// }




	function show(){
		$listaInstitucion=Institucion::all();

		require_once('../../../Views/admin/Institucion/show.php');
	}

	function updateshow(){
		$cedula=$_GET['cedula'];
		$institucion=Institucion::searchById($cedula);
		require_once('../../../Views/admin/Institucion/updateshow.php');
	}

	function update(){
		if(isset($_POST['cedula'])) {

		$institucion = new institucion($_POST['nombre'],$_POST['direccion'],$_POST['cedula'],$_POST['telefono'],$_POST['tipo']);
		Institucion::update($institucion);
		
		$this->show();
	}
	}
	function delete(){
		
		$cedula=$_GET['cedula'];
		Institucion::delete($cedula);
		$this->show();
	}

	function search(){
		if (!empty($_POST['cedula'])) {
			$cedula=$_POST['cedula'];
			$institucion=Institucion::searchById($cedula);
			$listaInstitucion[]=$institucion;
			//var_dump($id);
			//die();
			require_once('../../../Views/admin/Institucion/show.php');
		} else {
			$listaInstitucion=Institucion::all();

			require_once('../../../Views/admin/Institucion/show.php');
		}
		
		
	}

	function error(){
		require_once('../../Views/admin/Institucion/error.php');
	}

}

?>