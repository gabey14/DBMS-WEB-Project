<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body style="background-image: url(checkerboard-cross.png);">
<h1 style="text-align:center;margin-top:2%">Student Details</h1><br>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num = $_POST['uid'];
  

//Create a connection object
$conn = mysqli_connect('localhost','root','','abey');
if($conn){
    $query = "SELECT * FROM signupdata WHERE Password = '$num'";
    $result = mysqli_query($conn,$query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
         
            $query = "call studentdetails($num);";
            
            $res = mysqli_query($conn,$query);
            
            echo "<table border='2' align='center' padding='5px'>
            <tr style='background-color:crimson'>
            
            <th align='center' width='30%'>Name</th>
            
            <th align='center' width='30%'>Email</th>
            
            <th align='center' width='30%'>Password</th>
            
            </tr>";
            
            while($row = mysqli_fetch_assoc($res)){
            
                echo "<tr style='background-color:whitesmoke'>";
            
                echo "<td align='center'>" . $row['Name'] . "</td>";
              
                echo "<td align='center'>" . $row['Email'] . "</td>";
              
                echo "<td align='center'>" . $row['Password'] . "</td>";
              
                echo "</tr>";
            }
        }
        else{
            echo '<script>alert("UID does not exist!")
            location.replace("studentdetails.php")
            </script>';
        }
     }


echo "</table>";



}
else{
    die("Sorry failed to connect: ".mysqli_connect_errno());
}
}

?> 
</body>
</html>
