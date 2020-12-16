<?php 

class TipoConvenioController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../Views/admin/tipo/bienvenido.php');
	}

	function register(){
		require_once('../../../Views/admin/tipo/register.php');
	}

	function save(){
		if(isset($_POST['id'])  || isset($_POST['descripcion'])) {

		$tipoConvenio= new TipoConvenio ($_POST['id'],$_POST['descripcion'] );

		TipoConvenio::save($tipoConvenio);
		echo '<script>
        alert("Regsitrado corrctamente");
         location.href="ir-registro.php";
        </script>';
	}
	}

	function show(){
		$listaTipoConvenio=TipoConvenio::all();

		require_once('../../../Views/admin/tipo/show.php');
	}
 
	function updateshow(){
		$id=$_GET['id'];
		$tipoConvenio=TipoConvenio::searchById($id);
		require_once('../../../Views/admin/tipo/updateshow.php');
	}

	function update(){
		$tipoConvenio = new TipoConvenio ($_POST['id'],$_POST['descripcion'] );
		TipoConvenio::update($tipoConvenio);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		TipoConvenio::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$tipoConvenio=TipoConvenio::searchById($id);
			$listaTipoConvenio[]=$tipoConvenio;
			//var_dump($id);
			//die();
			require_once('../../../Views/admin/tipo/show.php');
		} else {
			$listaVisitantes=Visitantes::all();

			require_once('../../../Views/admin/tipo/show.php');
		}
		
		
	}

	function error(){
		require_once('../../../Views/admin/tipo/error.php');
	}

}

?>