<?php
class Users extends Controller {
	public function __construct() {
		// load model
		$this->userModel = $this->model('User');

	}

	public function register() {
		// check for post
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			// process form

			// sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			// 
			// Prevent parse errors when accessing input[type="checkbox"] NULL POST vars
			$_POST['terms'] = (isset($_POST['terms']) ? $_POST['terms']  : 'not-checked'
			);
			// init data
			$data = [
				'name' => trim($_POST['name']),
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'terms' => trim($_POST['terms']),
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => '',
				'confirm_terms_err' => ''
			];

			// validate email
			if(empty($data['email'])) {
				$data['email_err'] = 'Please enter email.';
			} else {
				// check email
				if($this->userModel->findUserByEmail($data['email'])) {
					$data['email_err'] = 'Email is already taken.';
				}
			}

			// validate name
			if(empty($data['name'])) {
				$data['name_err'] = 'Please enter name.';
			}

			// validate password
			if(empty($data['password'])) {
				$data['password_err'] = 'Please enter password.';
			} elseif(strlen($data['password']) < 8) {
				$data['password_err'] = 'Password must be at leas 8 characters.';
			}

			// check terms and conditions checkbox
			if($_POST['terms'] == 'not-checked') {
				$data['confirm_terms_err'] = 'Please agree to the terms and conditions.';
			}

			// make sure errors are empty
			if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_terms_err'])) {
				
				// Hash password
				$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

				// Register user
				if($this->userModel->register($data)) {
					flash('register_success', 'You are now registered and can log in.');
					redirect('users/login');
				} else {
					die('Something went wrong.');
				}

			} else {
				// load view
				$this->view('users/register', $data);
			}
		} else {
			// init form related data
			$data = [
				'name' => '',
				'email' => '',
				'password' => '',
				'terms' => '',
				'confirm_password' => '',
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => '',
				'confirm_terms_err' => ''
			];

			// load view
			$this->view('users/register', $data);
		}
	}
	public function login() {
		$loggedInUser = null;
		// check for post
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			// process form

			// sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			// init data
			$data = [
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'email_err' => '',
				'password_err' => ''
			];

			// validate email
			if(empty($data['email'])) {
				$data['email_err'] = 'Please enter email.';
			} 

			// validate password
			if(empty($data['password'])) {
				$data['password_err'] = 'Please enter password.';
			} elseif(strlen($data['password']) < 8) {
				$data['password_err'] = 'Password must be at leas 8 characters.';
			}

			// check for user/email
			if($this->userModel->findUserByEmail($data['email'])) {
				// user found
			} else {
				// throw error
				$data['email_err'] = 'No user found.';
			}
			// make sure errors are empty
			if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err'])) {
				// check and set logged in user
				$loggedInUser = $this->userModel->login($data['email'], $data['password']);
				if($loggedInUser) {
					// Create session
					$this->createUserSession($loggedInUser);

				} else {
					// throw error
					$data['password_err'] = 'Password incorrect';
					$this->view('users/login', $data);
				}
			} else {
				// load view
				$this->view('users/login', $data);
			}
		} else {
			// init form related data
			$data = [
				'email' =>  '',
				'password' =>  '',
				'email_err' => '',
				'password_err' => '',
			];
			
			// load view
			$this->view('users/login', $data);
		}
	}
	public function createUserSession($user) {
		$_SESSION['user_id'] = $user->id;
		$_SESSION['user_email'] = $user->email;
		$_SESSION['user_name'] = $user->name;
		redirect('posts');
	}
	public function logout() {
		unset($_SESSION['user_id']);
		unset($_SESSION['user_email']);
		unset($_SESSION['user_name']);
		session_destroy();
		redirect('users/login');
	}
}