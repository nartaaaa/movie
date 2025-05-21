<?php

session_start();
$user="root";
$pass="";
$host="localhost";
$dbname="movie";

try{
    $conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
}catch(PDOException $e){
    echo "error;".$e->getMessage();
}

?>