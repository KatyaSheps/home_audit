<?php

namespace classes;

interface IStorage {

	const TYPE_CATEGORY = 'category';
	const TYPE_SPENDS = 'spends';

	public function load($type, $target = null);
	public function save($type, Data $data);

}