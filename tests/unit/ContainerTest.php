<?php

use PHPUnit\Framework\TestCase;
use App\App;

class ContainerTest extends TestCase
{
	private $app;
	private $container;

	protected function setUp()
	{
		$this->app = new App;
		$this->container = $this->app->getContainer();
	}

	protected function tearDown()
	{
		$this->app = null;
		$this->container = null;
	}

	public function test_container_has_items_array()
	{
		
		$this->assertTrue(property_exists($this->container, 'items'));
	}

	public function test_can_add_offset_to_items()
	{
		$this->container->offsetSet('test', 'value');

		$this->assertEquals($this->container->offsetGet('test'), 'value');
	}
}