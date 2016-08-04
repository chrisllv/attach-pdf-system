<?php
class DATABASE_CONFIG {

    public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'secure203.servconfig.com',
		'login' => 'chrisl25_pdf',
		'password' => 'pdfsystem123',
		'database' => 'chrisl25_pdf',
	);

	function __construct() {
		$this->default = $this->default;
	} //fin _construct

    function DATABASE_CONFIG() {
		$this->__construct();
	}
}
