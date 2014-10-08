<?php

class CArName {
	private $name;

	public function __construct ($name) {
		$this->name = $name;
	}

	public function setName ($name) {
		$this->name=$name;
	}
	public function geName () {
		return $this->name;
	}
}
?>
