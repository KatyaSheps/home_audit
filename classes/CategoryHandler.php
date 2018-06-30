<?php

namespace classes;

use classes\models\Categories;

class CategoryHandler extends Handler {

	public function __construct($storage) {
		parent::__construct($storage);
	}

	public function getCategoriesList() {
		/**
		 * @var  $categories Categories
		 */
		$categories = $this->storage->load(IStorage::TYPE_CATEGORY);
		$categoriesList = $categories->getActiveElementsByFieldName('title');
		return $categoriesList;

	}

}