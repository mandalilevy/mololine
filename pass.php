<!DOCTYPE html>
<html lang="en">
<head>
  <title>MOLOLINE SHUTTLE SERVICE</title>
 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/logo.jpg" type = "image/x-icon"> 
  <link rel = "icon" href = "img/logo.jpg" type = "image/x-icon"> 
  
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-dark" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 ml-auto-auto">
    <li class="nav-item">
        <a style="color: white; font-family:Verdana; font-weight: bolder;" >MOLOLINE SHUTTLE SERVICES</a>
      </li>
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
     <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="pass.php">Booked Seats</a>
      </li>
    <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="destination.php">Add Destination</a>
      </li>
      <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="price.php">Destination Price</a>
      </li>
     
     
       <li class="nav-item">
        <a style="color: red; font-family:Verdana; cursor: pointer; font-weight: bolder;" href="index.php" class="nav-link">Log Out</a>
      </li>
 </ul>
 </div> 
 </nav>
 <div class="bg">
   
   <div class="container pt-sm-4">
  <div class="">
    <div class="">
       <table class="table  table-bordered table-responsive-sm table-sm">
        <center><legend style="color: white;font-weight: bolder;">BOOKED SEATS</legend></center> 
    <thead class="thead-light">

<tr>
<th scope="col" style="width: auto;" ><strong>PASSANGER NAME</strong></th>
<th scope="col" style="width: auto;" ><strong>CONTACTS</strong></th>
<th scope="col" style="width: auto;"><strong>DATE OF TRAVEL</strong></th>
<th scope="col" style="width: auto;" ><strong>FROM</strong></th>
<th scope="col" style="width: auto;"><strong>TO</strong></th>
<th scope="col" style="width: auto;"><strong>SEAT NUMBER </strong></th>


</tr>
</thead>
<tbody class="bg-light">
<?php
$con=mysqli_connect("127.0.0.1","root","","mololine");
$query ="SELECT * FROM `book` order by `date`";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?>

<tr>
  <td style="width: auto;"><?php echo $row["name"]; ?></td>
<td  style="width: auto;"><?php echo $row["cont"]; ?></td>
<td style="width: auto;"><?php echo $row["date"]; ?></td>
<td  style="width: auto;"><?php echo $row["start"]; ?></td>
<td  style="width: auto;"><?php echo $row["end"]; ?></td>
<td  style="width: auto;"><?php echo $row["seat"]; ?></td>


</tr>
<?php } ?>

</tbody>
</table>
  </div>
</div>
 </div>





    <style>
        body, html {
  height: 100%;
}
.bg {
  /* The image used */
  background-image: url("img/molo.jpg");

  /* Half height */
  height: 91%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
</body> 
</html>
