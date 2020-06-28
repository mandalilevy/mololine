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





</ul >

<ul class="navbar-nav  mt-lg-0 ml-auto-auto">
  <li class="nav-item">
          <?php 
  session_start();
if (isset($_SESSION['passanger'])) {
                  echo '<a style="color: red; font-family:Verdana; font-weight:bolder;" class="nav-link">PASSANGER ID: '.$_SESSION['passanger'].'</a>';
                    }


 ?>
      </li>
</ul>
 <ul class="navbar-nav  mt-lg-0 mx-auto">
     <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Booked Seats</a>
      </li>
    <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="seat.php">Book A Seat</a>
      </li>
       
 </ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
   <li class="nav-item">
      
   <?php 
echo '<a class="nav-link ml-auto" style="color: red; font-weight:bolder; font-family:Verdana"  href="logout.php?logout">Sign Out </a>';
  ?>
   
      </li>
 </ul>
 </div> 
 </nav>
 <div class="bg">
   <div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                      <div class="card-body">
                        <h3 class="text-center text-info"> <u>Add/Update Destination Price </u></h3>

<?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div style="font-weight: bolder;" class="card-title alert-light text-secondary text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div style="font-weight: bolder"   class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>






                        <form id="login-form" class="form" action="dp.php" method="post">
                            
                            <div class="form-group">
                                <label for="username" class="text-info">From:</label><br>
                                <select required="" class="form-control"  name="from" id="">
                                <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","mololine");
$query = "SELECT * FROM destination";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>
                                <option><?php echo $row['name'];?></option>

                                
                              <?php } ?>


                              </select>
                            </div>
                           <div class="form-group">
                                <label for="username" class="text-info">To:</label><br>
                                <select required="" class="form-control"  name="to" id="">
                                <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","mololine");
$query = "SELECT * FROM destination";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>
                                <option><?php echo $row['name'];?></option>

                                
                              <?php } ?>


                              </select>
                            </div>
                             <div class="form-group">
                         
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Display Price">
                            </div>
                              <div class="form-group">
                          <label for="username" class="text-info">Price:</label><br>

                                <input type="number" required="" name="price" class="form-control" readonly="readonly">
                            </div>
                           
                            <div class="form-group">
                         
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Add">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </div>





    <style>
         #login .container #login-row #login-column #login-box {
  margin-top: 0px;
  max-width: 600px;
  height: 500px;
  border: 1px solid #9C9C9C;
  background-color: white;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 0px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
        body, html {
            margin: 0;
  padding: 0;
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
