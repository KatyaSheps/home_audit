<?php

namespace classes\models;


use classes\Data;

class Spends extends Data {

	private $spends;

	public function __construct($spends) {
		$this->spends = $spends;
	}

	public function isEmpty() {
		return (empty($this->spends));
	}

	public function prepareForSave() {
		return $this->spends;
	}

	public function getSpends() {
		return $this->spends;
	}


}