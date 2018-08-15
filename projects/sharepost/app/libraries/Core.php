<?php
/*
	Core App Class
		-Creates URL & Core Controller
		-URL format: /controller/method/params
*/
class Core {
	protected $currentController = null;
	protected $currentMethod = 'index';
	protected $params = [];
	const CONTROLLER_BASE_PATH = '../app/controllers/';
	
	public function __construct() {
		// Get sanitized array of url parameters.
		$url = $this->getUrl();

		// Set current controller based on 1st array element.
		$this->currentController = $this->setCurrentController($url);
		unset($url[0]);

		// Require the corresponding controller code.
		require_once self::CONTROLLER_BASE_PATH . $this->currentController . '.php';

	    // Create controller instance and pass in params.
		$this->currentController = new $this->currentController();

      	// Check 2nd element which corresponds to controller method.
		$this->currentMethod = $this->setCurrentMethod($url);
		unset($url[1]);

		// Get numeric indexed array of url parameters.
	    $this->params = $url ? array_values($url) : [];
	    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
	}
	public static function setCurrentController($url) {
		if(isset($url) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {

			return ucwords($url[0]);
		} else {
			// If no controllerr exists then return 'Pages'.
			return 'Pages';
		}	
	}
	public function getUrl() {
		$url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url']), FILTER_SANITIZE_URL)) : null;
		return $url;
	}

	public function setCurrentMethod($url) {
		if(isset($url[1])) {
			$method = $url[1];
			if(method_exists($this->currentController, $method)) {
				return $method;
			}
		} else {
			return 'index';
		}
	}
}