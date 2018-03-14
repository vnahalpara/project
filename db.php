<?php
class db
{
	protected $_connection;

	function __construct()
	{
		$this->_connection = new mysqli("localhost", "root", "root", "project");
	}

	public function getConnection()
	{
		return $this->_connection;
	}
}
?>