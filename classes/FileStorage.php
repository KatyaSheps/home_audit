<?php

namespace classes;

use classes\models\Categories;

class FileStorage implements IStorage {

	public function load($type, $target = null) {
		switch ($type) {
			case IStorage::TYPE_CATEGORY:
				$data = file('data/categories.txt');
				$result = [];
				foreach ($data as $row) {
					list ($id, $title, $isActive) = explode(';', $row);
					$result[] = [
						'id' => $id,
						'title' => $title,
						'is_active' => $isActive
					];
				}
				return new Categories($result);
			default:
				break;

		}
	}

	public function save($type, Data $data) {
		// TODO: Implement save() method.
	}

}