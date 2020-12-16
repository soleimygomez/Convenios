<?php 

class Db
{
	private static $instance=NULL;
	
	function __construct(){}

	public static function  getConnect(){
		if (!isset(self::$instance)) {
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$instance= new PDO('mysql:host=3.83.175.14;dbname=convenios','admin','edyson10',$pdo_options);
		} 
		return self::$instance;
	}
}

 ?>
