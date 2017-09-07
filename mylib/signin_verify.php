<?php
    require './conn.php';
    $email = $_REQUEST['email'];
    $pwd = to_hash($_REQUEST['password']);
    
    $con  = new conn();
    $con->connect();
    
    $query= mysqli_query($con->conn,
            "SELECT * FROM users WHERE email='".$email."' and pwd='".$pwd."'");
    if(mysqli_num_rows($query)!=1)
        die("error");
    else
    {
        $token= random_str(20);//, $keyspace);
        session_start();
        $_SESSION['token']=$token;
        $_SESSION['time']=time();
        mysqli_query($con->conn, "update users set token='".$token."' where email='".$email."' and pwd='".$pwd."'");
        header("location:profile.php");
    }