<?php

class ConvenioController
{

	function __construct()
	{
	}

	function index()
	{
		require_once('../../../Views/admin/Convenio/register.php');

	}

	function register()
	{
	

    require_once('../../../Views/admin/Convenio/register.php'); 

		
	}

	function save()
	{

		//die(json_encode($_FILES));
		$directorio = "Archivos/";

		if(!is_dir($directorio)){
			mkdir($directorio, 0755, true);
		}

		if (move_uploaded_file($_FILES['archivosubido']['tmp_name'], $directorio . $_FILES['archivosubido']['name'])) {
			$archivo_url = $directorio . $_FILES['archivosubido']['name'];
			$archivo_resultado = "Se subio correctamente el archivo";
		} else {
			echo '->' . json_encode(error_get_last());


		}


		$ruta = explode('/', $archivo_url);

		$convenio = new convenio($_POST['id'], $_POST['fecha_inicio'], $_POST['fecha_fin'], $_POST['nombre'], $_POST['tipo_convenio'], $ruta[1], $_POST['institucion']);
		Convenio::save($convenio);
		echo '<script>
        alert("Registrado corrctamente");
         location.href="ir-registro.php";
		</script>';
		
	}

	function show()
	{
		$listaConvenios = Convenio::all();

		require_once('../../../Views/admin/Convenio/show.php');
	}

	function updateshow()
	{
		$id = $_GET['id'];
		$convenio = Convenio::searchById($id);
		require_once('../../../Views/admin/Convenio/updateshow.php');
	}

	function update()
	{
		$convenio =  new convenio($_POST['id'], $_POST['fecha_inicio'], $_POST['fecha_fin'], $_POST['nombre'], $_POST['tipo_convenio'], $_POST['documento'], $_POST['institucion']);
		Convenio::update($convenio);
		echo '<script>
        alert("Registrado correctamente");
         location.href="ir-tabla.php";
        </script>';

		$this->show();
	}
	function delete()
	{
		$id = $_GET['id'];
		Convenio::delete($id);
		$this->show();
	}

	function search()
	{
		if (!empty($_POST['id'])) {
			$id = $_POST['id'];
			$convenio = Convenio::searchById($id);
			$listaConvenios[] = $convenio;
			//var_dump($id);
			//die();
			require_once('../../../Views/admin/Convenio/show.php');
		} else {
			$listaGranja = Granja::all();

			require_once('../../../Views/admin/Convenio/show.php');
		}
	}

	function error()
	{
		require_once('../../Views/admin/Convenio/error.php');
	}
}
