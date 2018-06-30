<?php

namespace classes;

use classes\models\Spends;

class SpendsHandler extends Handler {

	/**
	 * @var $spends Spends
	 */
	private $spends;

	public function __construct($storage, $categoryId) {
		parent::__construct($storage);
		$this->spends = $this->storage->load(IStorage::TYPE_SPENDS, $categoryId);
	}

	public function getSumByPeriod($startDate, $endDate) {
		if ($this->spends->isEmpty())
			return null;

		$sum = 0;
		foreach ($this->spends->getSpends() as $spend) {
			if (($spend['date'] >= $startDate) && ($spend['date'] <= $endDate)) {
				$sum = $sum + $spend['sum'];
			}
		}

		return $sum;
	}

}