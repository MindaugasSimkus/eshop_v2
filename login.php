<?php
session_start();

if (isset($_POST['pass']) && $_POST['pass'] != null) {
	if ($_POST['pass'] == "12345") {
		$_SESSION['is_admin'] = TRUE;
		header('Location: index.php');
	} else {
		echo "wrong password!";
		header('Location: index.php');
	}

}


include 'templates/login.php';