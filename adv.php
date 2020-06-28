<?php

$con=mysqli_connect("127.0.0.1","root","","mololine");
$query ="SELECT * FROM `vehicle`  WHERE name='".$_POST['dest']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  
header("Location:vehicle.php?Empty=Vehicle already Registered into the system!!");
}
else{
$sql="INSERT INTO `vehicle`(`name`) VALUES('".$_POST['dest']."')";
if(mysqli_query($con, $sql)){
 header("Location:vehicle.php?Invalid=Vehicle Successfully Registered!!");
}
}

?>