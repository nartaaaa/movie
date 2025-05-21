<?php
include_once("config.php");
if(isset($_POST['SUBMIT'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=password_hash($temPass, PASSWORD_DEFAULT);
    if(empty($name)|| empty($surname) ||empty($username)||empty($email)||empty($password)){
        echo "You need to fill all the fields";
    }else{
        $sql="SELECT username from users Where username=:username";
        $tempSQL=$conn->prepare($sql);
        $tempSQL->bindParam(':username',$username);
        $tempSQL->execute();
    }
    if($tempSQL->rowCount()>0){
        echo "username exists";
        header ("refresh:2; url=signup_php");
    }
    else{
        $sql="INSERT INTO users(name,surname,username,email,password) value(:name, :surname ,:username,:email,:password";

    }

}
?>