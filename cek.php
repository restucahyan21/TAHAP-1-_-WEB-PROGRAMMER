<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if(!isset($_SESSION['role'])){
		header("location:login.php");
	} else {
		$role = $_SESSION['role'];
	}
	?>