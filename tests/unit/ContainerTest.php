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

	public function test_container_has_items_array()
	{
		
		$this->assertTrue(property_exists($this->container, 'items'));
	}
}