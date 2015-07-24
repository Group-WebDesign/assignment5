<!DOCTYPE HTML>
<html> 
	<body>

		<form action="content1.php" action= "content2.php" method="post">
			Name: <input type="text" name="username"><br> <br>
			<input type="submit" value="Login">
		</form>

	</body>
</html>

<?php

session_start();
session_destroy();

?>