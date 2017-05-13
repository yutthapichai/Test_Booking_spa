<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "spa";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($connection){
    //echo "success";
}else{
    echo "No sucess";
}
mysqli_set_charset($connection,'utf8');
?>