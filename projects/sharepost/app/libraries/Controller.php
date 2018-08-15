<?php 
/*

Load models and views from the other controllers.
Every controller we create will extend this class.

Every controller will extend this base controller.
*/

class Controller {
	// load model
	public function model($model) {
		// Require model file
		require_once '../app/models/' . $model . '.php';

		// Instantiate model
		return new $model();
	}
	// load view
	public function view($view, $data = []) {

		if(file_exists('../app/views/' . $view . '.php')) {
			require_once '../app/views/' . $view . '.php';
		} else {
			die('View does not exist');
		}
	}

	// Base controller method
	public function index() {
		$data = [
			'title' => 'SharePost',
		];
		if(isLoggedIn()) {
			redirect('posts');
		}
		$this->view('pages/index', $data);
	}
}


