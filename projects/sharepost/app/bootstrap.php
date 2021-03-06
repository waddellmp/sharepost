<?php

// Require all the necessary files we need (libraries, config files, helpers, etc).

// Load Config
require_once 'config/config.php';
// Load Helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

// Autoload libraries
spl_autoload_register(function($className) {
	require_once 'libraries/' . $className . '.php';
});