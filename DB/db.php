<?php

$username ="root";
$password ="";
$servername = "localhost";
$select_db = "study";
$connection = mysqli_connect($servername,$username,$password,$select_db);
if(!$connection){
    echo "cannot be connected to the databse";
}

?>