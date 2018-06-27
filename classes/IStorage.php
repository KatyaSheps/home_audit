<?php
require_once ('Data.php');

interface IStorage {

	const TYPE_CATEGORY = 'category';
	const TYPE_SPENDS = 'spends';

	public function load($type, $target);
	public function save($type, Data $data);

}