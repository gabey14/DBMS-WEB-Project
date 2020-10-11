<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="form.js">   
    </script>
    <title>Sign Up Page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="/FirstPhp/Signin.php" style="color:crimson;">St. Xavier's College</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/FirstPhp/Signin.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
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

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $passwrd = $_POST['pswd'];

//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "abey";
//Create a connection object
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if(!$conn){
    die("Sorry failed to connect: ".mysqli_connect_errno());
}
else{

    //Submit these to a database

    //Sql Query to be executed 
    $sql = "INSERT INTO `signupdata` (`Name`, `Email`, `Password`) VALUES ('$name', '$email', '$passwrd');";
    $result = mysqli_query($conn , $sql);

    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You have signed in successfully!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    else{
      //echo "The record could not be inserted successfully because of this error".mysqli_error($conn);
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Account already exists! Click here to <a href="/FirstPhp/Login.php">Login</a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }


}

}
?>


<div class="container mt-3" >
<h1><i>Sign Up</i></h1>

<form name="myform" onsubmit="return Validateform()" class="was-validated" action="/FirstPhp/Signin.php" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="usrname" size="20"  required>
    </div>
    <div class="form-group">
                <label for="email">Xavier's Email Id </label>
                <input type="text" name="email" class="form-control" id="emid"  aria-describedby="emailHelp" placeholder="Enter xaviers.edu email id" size="30" required>
                <small class="form-text text-muted" id="emailHelp">We'll never share your data with anyone else.</small>
            </div>
    <div class="form-group">
        <label for="pswd">Password</label>
        <input type="password" name="pswd" class="form-control" id="pswrd" placeholder="Enter uid as password" maxlength="6"  required>
        <small class="form-text text-muted">We'll never share your data with anyone else.</small>
        <input type="checkbox" onclick="Click()"> Show Password<br>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button class="btn btn-primary" type="reset">Clear</button>&nbsp;&nbsp;&nbsp;
      <label><span>Click Here to</span></label> 
      <button class="btn btn-primary" onclick="Login()">Login</button>
    </div>
    </form>
    
   
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>