<?php

namespace App;

use ArrayAccess;

class Container implements ArrayAccess
{
	protected $items;

	public function offsetSet($offset, $value)
	{
		$this->items[$offset] = $value;
	}

	public function offsetGet($offset)
	{
		
		return $this->items[$offset];
	}

	public function offsetUnset($offset)
	{

	}

	public function offsetExists($offset)
	{

	}
}