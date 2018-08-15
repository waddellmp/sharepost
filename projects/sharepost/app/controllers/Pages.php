<?php
class Pages extends Controller {
	public function __construct() {
	}

	public function about () {
		$data = [
			'title' => 'About Us',
		];
		$this->view('pages/about', $data);
	}
}