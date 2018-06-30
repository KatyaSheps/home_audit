<?php

namespace classes\helpers;


class DataTimeHelper {

	public static function getDateMinusOneMonth() {
		return mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'));
	}

	public static function getCurrentDate() {
		return time();
	}

}