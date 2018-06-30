<?php

namespace classes;

use classes\models\Categories;
use classes\models\Spends;

class FileStorage implements IStorage {

	public function load($type, $target = null) {
		switch ($type) {
			case IStorage::TYPE_CATEGORY :
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
			case IStorage::TYPE_SPENDS :
				if ((!file_exists("data/spends/$target.txt")) || (empty(file_get_contents("data/spends/$target.txt"))))
					return new Spends([]);

				$data = file("data/spends/$target.txt");
				$result = [];
				foreach ($data as $row) {
					list ($id, $title, $sum, $date) = explode(';', $row);
					$result[] = [
						'id' => $id,
						'title' => $title,
						'sum' => $sum,
						'date' => $date
					];
				}
				return new Spends($result);

			default:
				break;

		}
	}

	public function save($type, Data $data) {
		// TODO: Implement save() method.
	}

}