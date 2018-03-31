<?php
	session_start();
	$_SESSION['username'] = '';
	$_SESSION['userisadmin'] = false;
	header("Location:index.php");
?>