<?php
session_start();
ob_start();

include_once 'config_2.php';

  if (count($_POST)>0){

	// Process form request
  if (isset($_POST['loginuser'])) {
      $user->username = trim($_POST['username']);
      $user->password = trim($_POST['password']);

    // Ensure no field is empty
    if (!empty($user->username) && !empty($user->password)) {
      // Hash password
      $user->password = md5($user->password);
      if ($user->login($user->username, $user->password)) {
		  $_SESSION['loggedin_time'] = time();
        ($_SESSION['us3rgr0up'] == 118) ? redirectTo('welcome') : redirectTo('splash');
      }
      else {
        $errors[] = "Authentication failed. Wrong credentials";
		  header ("Location:$ref?q=Wrong Username or Password.");
      }
    }
    else {
      $errors[] = "All fields are required.";
    }
  }
}
?>