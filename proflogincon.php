<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
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
    $passwrd_1 =  md5($passwrd);
    $sql = "INSERT INTO `prof_login` (`Username`, `Password`, `login_session`) VALUES ('$name', '$passwrd_1', current_timestamp());";
    $result = mysqli_query($conn , $sql);

    if($result){
      header("location:/FirstPhp/professordashboard.php");
  
    }
    else{
      //echo "The record could not be inserted successfully because of this error".mysqli_error($conn);
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Account does not exist! <a href="contactus.html">Contact</a> college for more details
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }


}

}
?>
