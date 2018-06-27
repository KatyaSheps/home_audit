<?php

require_once ('IStorage.php');

class SpendsHandler extends Handler {

	public function __construct($storage) {
		parent::__construct($storage);
	}

	public function getAllSpendsByMonth(array $categories) {}

}