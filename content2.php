<?php

session_start();
session_regenerate_id();

if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['pass'] == true){
	if(isset($_SESSION['username'])) {
		$_SESSION['temp'] = $_SESSION['username'];
		echo "Your session is running, " . $_SESSION['username'] . "<br>";
	}

	$_SESSION['visits']++;
	echo "<br> Hi $_SESSION[username], welcome to page 2! You have visited this page $_SESSION[visits] times! <br>";

	$_SESSION['username'] = $_SESSION['temp'];

	echo '<br> Click ';
	echo '<a href=content1.php>HERE</a>';
	echo ' to go back to page 1. <br>';

	session_write_close();
} else {
	header("Location: login.php");
}
?>