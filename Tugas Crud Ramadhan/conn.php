<?php
    $host = "localhost";
    $username= "root"; 
    $password="";
    $database="ramadhan";

    $conn = new mysqli($host,$username,$password,$database);
    if($conn -> connect_error){
        die("Database tidak terhubung".$conn -> connect_error);
    }
?>