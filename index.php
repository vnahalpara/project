<?php
ini_set('display_errors', 1);
require 'helper.php';
$helper = new Helper();

try {
	$data = $helper->getPost();
	$area = $helper->getArea();
	if($area =='admin')
	{
		require 'area/admin.php';
		$area = new Admin();
		$area->validUser($data);

	}
	else
	{
		require 'area/front.php';
		$area = new Front();
	}
} catch (Exception $e) {
	
}
?>