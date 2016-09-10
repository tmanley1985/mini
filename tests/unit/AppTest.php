<?php

use PHPUnit\Framework\TestCase;
use App\App;

class AppTest extends TestCase
{
	private $app;

	protected function setUp()
	{
		$this->app = new App;
	}

	public function test_can_get_container()
	{

	}
}