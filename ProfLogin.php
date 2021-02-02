<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link { color: coral;  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
  .navbar .nav-item .dropdown-menu{ margin-top:0; }
      }
    </style>
    <script src="form.js">   
    </script>
    <title>Login Page</title>
  </head>
  <body style="background-image: url(checkerboard-cross.png);">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/FirstPhp/Signin.php" style="color:coral">St. Xavier's College</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/FirstPhp/Signin.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/FirstPhp/aboutus.html" target="_blank">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://xaviers.edu/main/" target="_blank">College</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More Info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="contactus.html" target="_blank">Contact Us</a>
        </div>
      </li>
      </ul>
      
      
      

    
  </div>
</nav>

<?php include_once("proflogincon.php"); ?>

<img src="Xavierslogo.png" alt="Xavier's logo with link to BscIT Syllabi" width="150" height="150" style="float:right;margin-top:3%;margin-right:2%;">
<div class="container mt-3" >
<h1><i>Professor Login</i></h1>

<form name="myform" class="was-validated" action="/FirstPhp/ProfLogin.php" method="POST">
    <div class="form-group">
                <label for="name">User Name</label>               
                <i class="fa fa-user icon"></i>
                <input type="text" name="name" class="form-control" id="name"  aria-describedby="Help" placeholder="Enter username provided" size="30" style="width: 500px;" required>
                <small class="form-text text-muted" id="Help">We'll never share your data with anyone else.</small>
            </div>
    <div class="form-group">
        <label for="pswd">Password</label>
        <i class="fa fa-key icon"></i>
        <input type="password" name="pswd" class="form-control" id="pswrd" placeholder="Enter password provided" maxlength="10" style="width: 500px;" required>
        <small class="form-text text-muted">We'll never share your data with anyone else.</small>
        <input type="checkbox" onclick="Click()"> Show Password<br>
    </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button class="btn btn-primary" type="reset">Clear</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>