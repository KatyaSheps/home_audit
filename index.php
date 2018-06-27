<?php

if (empty($_GET)) {

	$categoryHandler = new CategoryHandler(new FileStorage());
	$spendsHandler = new SpendsHandler(new FileStorage());

	$categories = $categoryHandler->getCategoriesList();
	$spendsByMonth = $spendsHandler->getAllSpendsByMonth($categories);

	$view = new View();
	$view->render('index', $spendsByMonth);

}