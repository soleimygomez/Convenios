<?php
   class Institucion{
    private $nombre;
    private $direccion;
    private $telefono;
    private $tipo;
    private $cedula;
    
    
    function __construct($nombre,$direccion,$cedula,$telefono,$tipo)
	{
		$this->setNombre($nombre);
        $this->setDireccion($direccion);
       
		$this->setCedula($cedula);
		$this->setTelefono($telefono);	
        $this->setTipo($tipo);	
	 	
		
		
	} 
       
 
    
    public function getNombre(){
		return $this->nombre;
	}
 
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

    public function getDireccion(){
		return $this->direccion;
	}
	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getCedula(){
		return $this->cedula;
	}
	public function setCedula($cedula){
		$this->cedula = $cedula;
	}
    
    public function getTelefono(){
		return $this->telefono;
	}
 
	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getTipo(){
		return $this->tipo;
	}
 
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	 
    
    public static function save($institucion){
		$db=Db::getConnect();
		//var_dump($granja);
		//die();
		$insert=$db->prepare('INSERT INTO institucion VALUES ( :nombre,:direccion,:telefono,:tipo,:cedula)');
		$insert->bindValue('nombre',$institucion->getNombre());
        $insert->bindValue('direccion',$institucion->getDireccion());
		$insert->bindValue('telefono',$institucion->getTelefono());
		$insert->bindValue('tipo',$institucion->getTipo());
		$insert->bindValue('cedula',$institucion->getCedula());
		$insert->execute();
	}
 
	public static function all(){
		$db=Db::getConnect();
		$listaInstitucion=[];
 
		$select=$db->query('SELECT * FROM institucion ');
 
		foreach($select->fetchAll() as $institucion){
			$listaInstitucion[]=new Institucion($institucion['nombre'],$institucion['direccion'],$institucion['cedula'],$institucion['telefono'],$institucion['tipo']);
		}
		return $listaInstitucion;
	}
	
 
	public static function searchById($cedula){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM institucion WHERE cedula=:cedula');
		$select->bindValue('cedula',$cedula);
		$select->execute();
 
		$institucionDb=$select->fetch();
 
 
		$institucion = new Institucion($institucionDb['nombre'],$institucionDb['direccion'],$institucionDb['cedula'],$institucionDb['telefono'],$institucionDb['tipo']);
		//var_dump($granja);
		//die();
		return $institucion;
 
	}


	public function verificarInstitucion($cedula) {
        try {
        	    $db=Db::getConnect();
				$consulta=$db->prepare("SELECT cedula FROM institucion WHERE cedula = :cedula");
				
				$consulta->execute(array(':cedula' =>  $cedula));
					
					foreach ($consulta as $cel) {					
																	              
	                return true;
	            }
            		return false;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


	public static function update($institucion){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE institucion SET nombre=:nombre,direccion=:direccion, cedula=:cedula, telefono=:telefono, tipo=:tipo WHERE cedula=:cedula');
		$update->bindValue('nombre', $institucion->getNombre());
		$update->bindValue('direccion',$institucion->getDireccion());
		$update->bindValue('cedula', $institucion->getCedula());
        $update->bindValue('telefono',$institucion->getTelefono());
         $update->bindValue('tipo',$institucion->getTipo());
		$update->execute();
	}
 
	public static function delete($cedula){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM institucion WHERE cedula=:cedula');
		$delete->bindValue('cedula',$cedula);
		$delete->execute();		
	}
}
?>
