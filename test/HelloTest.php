<?php
require_once(__DIR__ . '/../protected/controllers/SiteController.php');
class HelloTest extends PHPUnit_Framework_TestCase
{
	public function testFun() {
		$obj = new SiteController('site');
		$this->assertTrue($obj instanceof SiteController);
		$params = $obj->actionIndex(1);
		$this->assertEquals(1, $params);
	}
}
?>
