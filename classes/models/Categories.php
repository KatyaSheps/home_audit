<?php
/**
 * Created by PhpStorm.
 * User: veatsly
 * Date: 30.06.2018
 * Time: 14:07
 */

namespace classes\models;


class Categories {
	private $categories;

	public function __construct(array $categories) {
		$this->categories = $categories;
	}

	public function getActiveElementsByFieldName($fieldName) {
		$result = [];
		foreach ($this->categories as $category) {
			if ($category['is_active'] == true) {
				$result[] = $category[$fieldName];
			}
		}
		return $result;
	}

}