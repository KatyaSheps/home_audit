<?php

if (empty($_GET)) {
	$categoryHandler = new CategoryHandler(new FileStorage());
	$spendsHandler = new SpendsHandler(new FileStorage());

}