<?php
$host = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "2512b2-php";
 
$conn = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$conn){
    die ("failed to connect");
}

?>