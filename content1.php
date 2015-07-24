<?php

session_start();
session_regenerate_id();

if(session_status() == PHP_SESSION_ACTIVE){
	if(isset($_POST['username'])){
		$_SESSION['username'] = $_POST['username'];
	}
	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}
	$_SESSION['visits']++;
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
		echo "Hi $_SESSION[username], you have visited this page $_SESSION[visits] times! <br>";
		echo '<br> Click ';
		echo '<a href=login.php>HERE</a>';
		echo ' to logout. <br>';

		echo '<br> OR, Click ';
		echo '<a href=content2.php>HERE</a>';
		echo ' to go to page 2. <br>';
		$_SESSION['pass'] = true;
	} else {
		echo 'A username must be entered! <br>';
		echo '<br> Click <a href=login.php>HERE</a>';
		echo ' to return to the login screen. <br>';
	}

	session_write_close();
}
?>