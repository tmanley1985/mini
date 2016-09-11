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
		if($this->items == null)
		{
			throw new \Exception("Array is null", 1);
			
		}

		if(!array_key_exists($offset, $this->items))
		{
			throw new \Exception("Offset is undefined", 1);
			
		}

		return $this->items[$offset];
	}

	public function offsetUnset($offset)
	{	
		if($this->has($offset))
			unset($this->items[$offset]);
	}

	public function offsetExists($offset)
	{
		return !!$this->offsetGet($offset);
	}

	public function has($offset)
	{
		return $this->offsetExists($offset);
	}
}