<?php

class Database {

	private static $instance = null;

	private $hostName = 'localhost';
	private $userName = 'root';
	private $password = '';
	private $database = 'bidsdev';
	private $connection;

	private  function  __construct() {

		$this->connection = new mysqli($this->hostName, $this->userName, $this->password, $this->database);

		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}

	}

	public static function getInstance(){

		if(self::$instance == NULL){
			self::$instance = new self();
		}

		return self::$instance;
	}
}

$firstconnection = Database::getInstance();
print_r($firstconnection);

echo "\n";

$secondconnection = Database::getInstance();
print_r($secondconnection);
?>