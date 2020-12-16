<?php 

class AdministradorController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../Views/admin/Administrador/register.php');
	}

	function register(){
		require_once('../../../Views/admin/Administrador/register.php');
	}

	function save(){
		
		$administrador= new Administrador($_POST['id_administrador'],$_POST['nombre'],$_POST['apellido'] ,$_POST['identificacion'],$_POST['telefono'],$_POST['tipo']);
		Administrador::save($administrador);
		 echo '<script>
        alert("Regsitrado corrctamente");
         location.href="ir-registro.php";
        </script>';
    
	}

	function show(){
		$listaAdministrador=Administrador::all();
		require_once('../../../Views/admin/Administrador/show.php');
	}



	function updateshow(){
		$id_administrador=$_GET['id_administrador'];
		$administrador=Administrador::searchById($id);
		require_once('../../../Views/admin/Administrador/updateshow.php');
	}

	function update(){
		$administrador =  new Administrador($_POST['id_administrador'],$_POST['nombre'],$_POST['apellido'] ,$_POST['identificacion'],$_POST['telefono'],$_POST['tipo']);
		Administrador::update($administrador);
		 echo '<script>
        alert("Regsitrado corrctamente");
         location.href="ir-tabla.php";
        </script>';
    
		 $this->show();
	}
	function delete(){
		$id_administrador=$_GET['id_administrador'];
		Pollito::delete($id_administrador);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id_administrador'])) {
			$id_administrador=$_POST['id_administrador'];
			$administrador=Administrador::searchById($id_administrador);
			$listaAdministrador[]=$administrador;
			//var_dump($id);
			//die();
			require_once('../../../Views/admin/Administrador/show.php');
		} else {
			$listaAdministrador=Administrador::all();

			require_once('../../../Views/admin/Administrador/show.php');
		}
		
		
	}

	function error(){
		require_once('../../Views/admin/Administrador/error.php');
	}

}

?>