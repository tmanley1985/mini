<?php

namespace App;

class App
{
	protected $container;

	public function __construct()
	{
		$this->container = new Container;
	}

	public function getContainer()
	{
		return $this->container;
	}
}