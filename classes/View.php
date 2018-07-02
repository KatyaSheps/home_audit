<?php

namespace classes;

class View {

	const VIEW_PATH = 'views/views/',
		LAYOUTS_PATH = 'views/layouts/';

	const VIEWS_EXTENSION = '.php';

	private $header,
		$footer;

	public function __construct() {
		$this->header = self::LAYOUTS_PATH . 'main_header' . self::VIEWS_EXTENSION;
		$this->footer = self::LAYOUTS_PATH . 'main_footer' . self::VIEWS_EXTENSION;
	}

	public function render($name, $data) {
		require_once ($this->header);
		require_once (self::VIEW_PATH . $name . self::VIEWS_EXTENSION);
		require_once ($this->footer);
	}

}