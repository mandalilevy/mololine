<?php

$con=mysqli_connect("127.0.0.1","root","","mololine");
$query ="SELECT * FROM `dprice`  WHERE start='".$_POST['from']."' AND end='".$_POST['to']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  $qr ="UPDATE `dprice` SET `price`='".$_POST['price']."' WHERE start='".$_POST['from']."' AND end='".$_POST['to']."'";   
  $jibu=mysqli_query($con,$qr); 
  if ($con->query($qr) === TRUE) {
header("Location: price.php?Empty=Update Successfull!!");
}
}
else{
$sql="INSERT INTO `dprice`(`start`, `end`, `price`) VALUES('".$_POST['from']."','".$_POST['to']."','".$_POST['price']."')";
if(mysqli_query($con, $sql)){
  header("Location: price.php?Invalid=Price Successfully Added!!");
}

}
?>