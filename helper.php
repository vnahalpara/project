<?php
require 'db.php';
class Helper
{
	protected $_mysqli;

	function __construct()
	{
		$sql = new db();
		$this->_mysqli = $sql->getConnection();
	}

	public function getPost()
	{
		$json_params = file_get_contents("php://input");
		$data = json_decode($json_params,true);

		return $data;
	}

	public function getArea()
	{
		$data = $this->getPost();
		if(isset($data['area']))
		{
			return $data['area'];
		}
		else
		{
			throw new Exception("Error area not define", 1);
			
		}

	}

	public function runQuery($query)
	{
		$result = $this->_mysqli->query($query);
		return $result;
	}
}
?>