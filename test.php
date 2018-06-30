<?php

require_once (__DIR__ . '/vendor/autoload.php');

use classes\FileStorage;

$fileStorage = new FileStorage();
$fileStorage->load(\classes\IStorage::TYPE_CATEGORY);