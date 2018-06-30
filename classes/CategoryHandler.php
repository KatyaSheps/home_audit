<?php

namespace classes;

use classes\models\Categories;

class CategoryHandler extends Handler {

	/**
	 * @var $categories Categories
	 */
	private $categories;

	public function __construct($storage) {
		parent::__construct($storage);
		/**
		 * @var  $categories Categories
		 */
		$this->categories = $this->storage->load(IStorage::TYPE_CATEGORY);
	}

	public function getCategoriesList() {
		return $this->categories->getActiveElementsByFieldName('title');
	}

}