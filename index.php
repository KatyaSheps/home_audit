<?php

require_once (__DIR__ . '/vendor/autoload.php');

use classes\CategoryHandler;
use classes\FileStorage;
use classes\SpendsHandler;
use classes\View;

if (empty($_GET)) {

	$categoryHandler = new CategoryHandler(new FileStorage());
//	$spendsHandler = new SpendsHandler(new FileStorage());

	$categories = $categoryHandler->getCategoriesList();
	var_dump($categories);
//	$spendsByMonth = $spendsHandler->getAllSpendsByMonth($categories);
//
//	$view = new View();
//	$view->render('index', $spendsByMonth);

}