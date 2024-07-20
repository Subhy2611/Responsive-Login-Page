<?php

$host="localhost";
$username="root";
$password="";
$dbname="websitelogin";
$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>