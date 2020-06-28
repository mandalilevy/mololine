<?php

$con=mysqli_connect("127.0.0.1","root","","mololine");
$query ="SELECT * FROM `passanger`  WHERE id='".$_POST['pid']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<p>You Already Registered</p>
			<a href="book.php">Back</a>
		</div>
	</div>
</body>
</html>


  
  <?php
}
else{
$sql="INSERT INTO `passanger`(`id`, `name`, `cont`, `email`, `pass`) VALUES('".$_POST['pid']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['email']."','".$_POST['pass']."')";
if(mysqli_query($con, $sql)){
  header("Location:book.php");
}
}

?>
