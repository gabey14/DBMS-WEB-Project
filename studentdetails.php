<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="form.js"></script>
   <style>
table
{
padding: 50px;
border-style:solid;
border-width:2px;
border-color:cornflowerblue;
text-align: center;
}
@media all and (min-width: 992px) {
      .navbar .nav-item .dropdown-menu{ display: none; }
      .navbar .nav-item:hover .nav-link { color: coral;  }
      .navbar .nav-item:hover .dropdown-menu{ display: block; }
    .navbar .nav-item .dropdown-menu{ margin-top:0; }
        }
</style>
    <title>Student Details</title>
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
            
            
            <button class="btn btn-outline-primary" onclick="Logout()">Logout</button>
      
          
        </div>
      </nav>
      <h1 style="text-align:center;margin-top:2%">Enter Student UID</h1><br>

      <form name="myform" action="/FirstPhp/storedprocedure.php" method="POST">
    
      <div class="form-group" style="text-align:center">
        <input type="number" name="uid" class="form-control" id="uid" placeholder="Enter uid " maxlength="6" pattern="/195[0-9]{3}$/i" style="width: 200px; text-align:center;display:block;margin-right:auto;margin-left:auto" required><br>
        <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button class="btn btn-primary" type="reset">Clear</button>
        </div>
      </form>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>