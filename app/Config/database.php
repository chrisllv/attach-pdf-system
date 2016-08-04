<?php
class DATABASE_CONFIG {

    public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '*daimon*',
		'database' => 'dominicar',
	);

	function __construct() {
		$this->default = $this->default;
	} //fin _construct

    function DATABASE_CONFIG() {
		$this->__construct();
	}
}
