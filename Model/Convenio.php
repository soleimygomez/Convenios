<?php
   class Convenio{
    private $id;
    private $fecha_inicio;
    private $fecha_fin;
	private $nombre;
	private $tipo_convenio;
	private $documento;
	private $institucion;
	 
    
    function __construct($id,$fecha_inicio,$fecha_fin,$nombre,$tipo_convenio,$documento,$institucion )
	{
		$this->setId($id);
		$this->setFechaInicio($fecha_inicio);
		$this->setFechaFin($fecha_fin);
		$this->setNombre($nombre);
		$this->setTipoConvenio($tipo_convenio);
		$this->setDocumento($documento);
		$this->setInstitucion($institucion);
		 
	
	}
    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}

	public function getFechaInicio(){
		return $this->fecha_inicio;
	}
 
	public function setFechaInicio($fecha_inicio){
		$this->fecha_inicio = $fecha_inicio;
	}

	public function getFechaFin(){
		return $this->fecha_fin;
	}
 
	public function setFechaFin($fecha_fin){
		$this->fecha_fin = $fecha_fin;
	}

	public function getNombre(){
		return $this->nombre;
	}
 
	public function setNombre($nombre){
		$this->nombre= $nombre;
	}

	public function getTipoConvenio(){
		return $this->tipo_convenio;
	}
 
	public function setTipoConvenio($tipo_convenio){
		$this->tipo_convenio = $tipo_convenio;
	}


	public function getDocumento(){
		return $this->documento;
	}
 
	public function setDocumento($documento){
		$this->documento = $documento;
	}

	public function getInstitucion(){
		return $this->institucion;
	}
 
	public function setInstitucion($institucion){
		$this->institucion = $institucion;
	}


	 

    
    public static function save($convenio){
		$db=Db::getConnect();
		//var_dump($galpon);
 		//die();
		$insert=$db->prepare('INSERT INTO convenio VALUES (:id, :fecha_inicio,:fecha_fin,:nombre,:tipo_convenio,:documento, :institucion )');
		$insert->bindValue('id',$convenio->getId());
		$insert->bindValue('fecha_inicio',$convenio->getFechaInicio());
		$insert->bindValue('fecha_fin',$convenio->getFechaFin());
		$insert->bindValue('nombre',$convenio->getNombre());
		$insert->bindValue('tipo_convenio',$convenio->getTipoConvenio());
		$insert->bindValue('documento',$convenio->getDocumento());
		$insert->bindValue('institucion',$convenio->getInstitucion());
		 $insert->execute();
	}
    public static function all(){
		$db=Db::getConnect();
		$listaConvenio=[];
 
		$select=$db->query('SELECT * FROM convenio order by id');
 
		foreach($select->fetchAll() as $convenio){
			$listaConvenio[]=new Convenio($convenio['id'],$convenio['fecha_inicio'],$convenio['fecha_fin'],$convenio['nombre'],$convenio['tipo_convenio'],$convenio['documento'],$convenio['institucion']);
		}
		return $listaConvenio;
	}
 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM convenio WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();
 
		$ConvenioDb=$select->fetch();
 
 
		$convenio = new Convenio($ConvenioDb['id'],$ConvenioDb['fecha_inicio'],$ConvenioDb['fecha_fin'],$ConvenioDb['nombre'],$ConvenioDb['tipo_convenio'],$ConvenioDb['documento'],$convenioDb['institucion']);
		//var_dump($lote);
		//die();
		return $convenio;
 
	}
 
	public static function update($convenio){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE convenio SET  fecha_inicio=:fecha_inicio, fecha_fin=:fecha_fin,nombre=:nombre,tipo_convenio=:tipo_convenio,documento=:documento, institucion=:institucion , id=:id WHERE id=:id');
		$update->bindValue('id',$convenio->getId());
		$update->bindValue('fecha_inicio',$convenio->getFechaInicio());
		$update->bindValue('fecha_fin',$convenio->getFechaFin());
		$update->bindValue('nombre',$convenio->getNombre());
		$update->bindValue('tipo_convenio',$convenio->getTipoConvenio());
		$update->bindValue('documento',$convenio->getDocumento());
		$update->bindValue('institucion',$convenio->getInstitucion());
		 	$update->execute();
	}
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM convenio WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
    
}
?>