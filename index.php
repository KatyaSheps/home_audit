<?php

require_once (__DIR__ . '/vendor/autoload.php');

use classes\CategoryHandler;
use classes\FileStorage;
use classes\SpendsHandler;
use classes\helpers\DataTimeHelper;
use classes\View;

if (empty($_GET)) {

	$categoryHandler = new CategoryHandler(new FileStorage());
	$categories = $categoryHandler->getCategoriesList();

	$spendsByMonth = [];
	foreach ($categories as $categoryId => $categoryName) {
		$spendsHandler = new SpendsHandler(new FileStorage(), $categoryId);
		$spendsSum = $spendsHandler->getSumByPeriod(DataTimeHelper::getDateMinusOneMonth(), DataTimeHelper::getCurrentDate());
		$spendsByMonth[$categoryName] = $spendsSum;
	}

	$view = new View();
	$view->render('index', ['categories' => $categories, 'spends' => $spendsByMonth]);

}