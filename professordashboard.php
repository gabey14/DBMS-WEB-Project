<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        @media all and (min-width: 992px) {
      .navbar .nav-item .dropdown-menu{ display: none; }
      .navbar .nav-item:hover .nav-link { color: coral;  }
      .navbar .nav-item:hover .dropdown-menu{ display: block; }
    .navbar .nav-item .dropdown-menu{ margin-top:0; }
        }
        .card{
          margin: auto;
          width: 60%;
          border: 1px ;
          padding: 5px;
        }
        #rcorners {
  border-radius: 25px;
  border: 3px transparent; 
  background-image: linear-gradient(180deg, #43cea2, #36d1dc);
}
      </style>
       <script src="form.js">   
    </script>
    <title>Dashboard</title>
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
      <?php 
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> You have logged in successfully! 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
?>

<div class="dashboard mt-3" style="text-align: center;font-size:100px;">
  <h1 style="text-shadow: 0 0 3px blue"><i>Dashboard</i></h1>
</div>
<div class="row">
    <div class="card col-sm-2 mt-5 mr-2" id="rcorners" style="width: 10rem;text-align:center">
    <a href="http://localhost/FirstPhp/index1.php" target="_blank">
  <img class="card-img-top" src="attendant-list.png" id="rcorners" alt="Card image cap"></a>
  <div class="card-body" style="height: 0rem;">
  <p style=" color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px green;font-size:medium"><b>Attendance</b></p>  
  </div>
</div>
<div class="card col-sm-2 mt-5 mr-2" id="rcorners" style="width: 10rem;text-align:center">
<a href="timetable.html" target="_blank">
  <img class="card-img-top" src="timetable.jpg" id="rcorners" alt="Card image cap"></a>
  <div class="card-body" style="height: 0rem;">
  <p style=" color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px green;font-size:medium">
  <b>TimeTable</b></p>  
  </div>
</div>
<div class="card col-sm-2 mt-5" id="rcorners" style="width: 10rem;text-align:center">
    <a href="http://localhost/FirstPhp/index2.php" target="_blank">
  <img class="card-img-top" src="grades.png" id="rcorners" alt="Card image cap"></a>
  <div class="card-body" style="height: 0rem;">
  <p style=" color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px green;font-size:medium"><b>Grades</b></p>  
  </div>
</div>
      </div>
      <div class="row">
    <div class="card col-sm-2 mt-5" id="rcorners" style="width: 10rem;text-align:center">
    <a href="http://localhost/FirstPhp/studentdetails.php" target="_blank">
  <img class="card-img-top" src="new.png" id="rcorners" alt="Card image cap"></a>
  <div class="card-body" style="height: 0rem;">
  <p style=" color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px green;font-size:medium"><b>Student Details</b></p>  
  </div>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>