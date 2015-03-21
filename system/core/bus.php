<?php
/**
* system registry bus
*
*/
final class Bus
{
	//总线上注册的组件
	private $_data = [];
	
	public function get($key)
	{
		return isset($this->_data[$key]) ? $this->_data[$key] : null;
	}
	
	public function set($key, $value)
	{
		$this->_data[$key] = $value;
	}
	
	public function has($key)
	{
		return isset($this->_data[$key]);
	}

}