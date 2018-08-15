<?php
session_start();

// Flash message helpter
function flash($name = '', $message = '', $class = 'alert alert-success') {
	// If there is a $name param.
	if(!empty($name)) {
		// If there is a msg param and there is no session $name.
		if(!empty($message) && empty($_SESSION[$name])) {
			
			// If there is a session name or class --unset it.
			if(!empty($_SESSION[$name])) {
				unset($_SESSION[$name]);
			}
			if(!empty($_SESSION[$name .'_class'])) {
				unset($_SESSION[$name .'_class']);
			}
			$_SESSION[$name] = $message;;
			$_SESSION[$name . '_class'] = $class;
		} 
		// If no msg param and session has a name then --check class
		elseif(empty($message) && !empty($_SESSION[$name])) {
			// Asign either an existing session class or set it.
			$class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
			echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
			unset($_SESSION[$name]);
			unset($_SESSION[$name . '_class']);
		}
	
	}
}

function isLoggedIn() {
	if(isset($_SESSION['user_id'])) {
		return true;
	} else {
		return false;
	}
}