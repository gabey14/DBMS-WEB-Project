<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $passwrd = $_POST['pswd'];
        $passwrd_1 =  md5($passwrd);
       
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
    $sql = "INSERT INTO `signupdata` (`Name`, `Email`, `Password`) VALUES ('$name', '$email', '$passwrd_1');";
    $result = mysqli_query($conn , $sql);

    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You have signed up successfully!<a href="/FirstPhp/Login.php">Login</a>
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