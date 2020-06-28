<!DOCTYPE html>
<html lang="en">
<head>
  <title>MOLOLINE BUS SERVICE</title>
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
   
 <div class="bg">
      <div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="padd.php" method="post">
                            <h3 class="text-center text-info">Passanger Registration</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Passanger ID:</label><br>
                                <input type="text" name="pid" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-info">Passanger Name:</label><br>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="" class="text-info">Passanger Contacts:</label><br>
                                <input type="text" maxlength="10" name="cont" id="" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="" class="text-info">Passanger Email:</label><br>
                                <input type="email" name="email" id="" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="" class="text-info">Passanger Password:</label><br>
                                <input type="password" name="pass" id="" class="form-control">
                            </div>

                            <div class="form-group">
                              <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="book.php" class="text-info">Login Here</a>
                            </div>
                        </form>
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
  height: 550px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
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
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>

</body> 
</html>
