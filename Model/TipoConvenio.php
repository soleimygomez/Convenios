<?php
   class TipoConvenio{
    private $id;
    private $descripcion;
    
       
    function __construct($id,$descripcion)
	{
		$this->setId($id);
		$this->setDescripcion($descripcion);
		
		
	}
    
    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}
       
    public function getDescripcion(){
		return $this->descripcion;
	}
 
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
       
    
    
    public static function save($tipoConvenio){
		$db=Db::getConnect();
		//var_dump($pollito);
		//die();
		$insert=$db->prepare('INSERT INTO tipo_convenio VALUES (:id, :descripcion)');
        $insert->bindValue('id',$tipoConvenio->getId());
		$insert->bindValue('descripcion',$tipoConvenio->getDescripcion());
		
		
		$insert->execute();
	}
 
	public static function all(){
		$db=Db::getConnect();
		$listaTipoConvenio=[];
 
		$select=$db->query('SELECT * FROM tipo_convenio order by id');
 
		foreach($select->fetchAll() as $tipoConvenio){
			$listaTipoConvenio[]=new TipoConvenio($tipoConvenio['id'],$tipoConvenio['descripcion']);
		}
		return $listaTipoConvenio;
	}

	
 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM tipo_convenio WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();
 
		$tipoConvenioDb=$select->fetch();
 
 
		$tipoConvenio=  new TipoConvenio($tipoConvenioDb['id'],$tipoConvenioDb['descripcion']);
		//var_dump($lote);
		//die();
		return $tipoConvenio;
 
	}
 
	public static function update($tipoConvenio){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE tipo_convenio SET id=:id, descripcion=:descripcion WHERE id=:id');
		$update->bindValue('id', $tipoConvenio->getId());
		$update->bindValue('descripcion',$tipoConvenio->getDescripcion());
		
		
		$update->execute();
	}
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM tipo_convenio WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}
?>