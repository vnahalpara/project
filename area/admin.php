<?php
class Admin
{
	protected $_helper;

	function __construct()
	{
		$this->_helper = new helper();	
	}

	public function getAreaName()
	{
		return get_class($this);
	}

	public function validUser($data)
	{
		$query = "SELECT firstname FROM adminuser WHERE id = 1";
		$result = $this->_helper->runQuery($query);
		var_dump($result);
	}
}
?>