<?php
	class Database {

		private $host = "localhost";
		private $dbuser = "root";
		private $dbpass = "root";
		private $dbname = "bvctrans_db";
		public $mysqli; // Идентификатор соединения
		private static $db = null;

   	public function __construct() {
   		$this->mysqli = new mysqli($this->host,$this->dbuser,$this->dbpass,$this->dbname);
    	$this->mysqli->query('SET NAMES UTF8');
    	$this->mysqli->query("SET character_set_client='utf8'");
  	}
  	public static function getDB() {
    	if (self::$db == null) self::$db = new DataBase();
    	return self::$db;
  	}


	}
?>