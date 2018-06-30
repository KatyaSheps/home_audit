<?php

namespace classes;

class Handler {

	protected $storage;

	public function __construct(IStorage $storage) {
		$this->storage = $storage;
	}

}