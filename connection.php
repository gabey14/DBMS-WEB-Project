<?php

$host="localhost";
$dbname="attendance";
$user="root";
$pass="";


$link= new mysqli($host,$user,$pass,$dbname);

if($link){

}

else{

    echo "error";
}



?>