<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
    $passwrd =  md5($passwrd);
    $sql = "INSERT INTO `logindata` (`Email`, `Password`, `login_session`) VALUES ('$email', '$passwrd', current_timestamp());";
    $result = mysqli_query($conn , $sql);

    if($result){
      header("location:/FirstPhp/studentdashboard.php");
    }
    else{
      //echo "The record could not be inserted successfully because of this error".mysqli_error($conn);
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> You have not signed up!! Click here to <a href="/FirstPhp/Signin.php">Sign Up</a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }


}

}
?>