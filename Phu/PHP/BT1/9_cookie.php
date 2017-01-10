<?php 
	setcookie("username","Phan Trung Phú");
	setcookie("password","khicon");

	if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
		echo "username là : " .$_COOKIE['username'] ." </br> password là  : " .$_COOKIE['password'];
	}
 ?>