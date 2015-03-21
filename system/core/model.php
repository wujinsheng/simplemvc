<?php
abstract class Model {
	protected $bus;

	public function __construct($bus) {
		$this->bus = $bus;
	}

	public function __get($key) {
		return $this->bus->get($key);
	}

	public function __set($key, $value) {
		$this->bus->set($key, $value);
	}
}