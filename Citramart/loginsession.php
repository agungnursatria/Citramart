<?php

session_start();
{
    include ('connect.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $connection->prepare("SELECT * FROM `data_akun` WHERE `username`=? AND `password`=?");
    $stmt->bindParam(1,$username);
    $stmt->bindParam(2,$password);
    $stmt->execute();
    $data = $stmt->fetch();
    if($data != null){
        $_SESSION['username'] = $_POST['username'];
        header("location: main.php");
    } else{
        header("location: index.php?messages=1");
    } 
}

?>