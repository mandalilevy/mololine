<?php 
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location:book.php");
}
else{
header("Location:book.php");
}
 ?>
