<?php
    require './conn.php';
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $pwd = to_hash($_REQUEST['password']);
    
    $con = new conn();
    
    $con->connect();
    
    //--getting the next available value---
    
    $id = id_get($con->conn,"users","uid");
    $query = mysqli_query($con->conn,"INSERT INTO users(`uid`,`name`,`email`,`pwd`) values('".$id."','".$name."','".$email."','".$pwd."')") or die("error occured");
    header("location:../login.php");
    ?>
    
    
    
