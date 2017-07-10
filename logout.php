<?php
session_start();

//$_SESSION['is_admin'] = false;
unset($_SESSION['is_admin']);
header('Location: index.php');

