<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class conn
{
    var $host="localhost",$user="root",$pwd="",$database="dbHack";
    var $conn;
    function connect()
    {
        //mysqli_connect($host, $user, $password, $database, $port, $socket)
        $this->conn= mysqli_connect($this->host, $this->user, $this->pwd, $this->database, 8080);//,"/opt/lampp/var/mysql/mysql.sock");//, $socket)
    }
    function listVal($query="")
    {
        $query=mysqli_query($this->conn,$query);
        return $query;
    }    
    function create_tables()
    {
        $iTab[0]="CREATE TABLE `dbHack`.`users` ( `uid` INT NOT NULL , `name` VARCHAR(30) NOT NULL , `email` VARCHAR(30) NOT NULL , `pwd` TEXT NOT NULL , `token` VARCHAR(30) NOT NULL , PRIMARY KEY (`uid`)) ENGINE = InnoDB";
        $iTab[1]="CREATE TABLE `dbHack`.`pchat` ( `mid` INT NOT NULL , `message` TEXT NOT NULL , `sid` INT NOT NULL , `rid` INT NOT NULL , PRIMARY KEY (`mid`)) ENGINE = InnoDB;";
        $iTab[2]="CREATE TABLE `dbHack`.`tags` ( `uid` INT NOT NULL , `php` TINYINT NOT NULL , `Java` TINYINT NOT NULL , `android` TINYINT NOT NULL , PRIMARY KEY (`uid`)) ENGINE = InnoDB";
    }
    
    
    
}
function to_hash($pwd)
    {
        return hash("md5", $pwd."garbage");
    }
function id_get($conn,$table="",$value="uid")
{
    $query = mysqli_query($conn,"SELECT * FROM `".$table."` ORDER BY '".$value."' asc");
    $i=1;
    while($data = mysqli_fetch_assoc($query))
    {
        if($i!=$data[$value]) break;
        $i++;
    }
    return $i;
}
function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}
function get_chat_history($conn,$rid,$sid)
{
    $query = mysqli_query($conn,"SELECT * FROM pchat WHERE (sid='".$sid."' and rid='".$rid."') or (sid='".$rid."' and rid='".$sid."')");
    $data['rid']=$rid;
    $data['sid']=$sid;
    $i=0;
    while($d=mysqli_fetch_assoc($query))
    {
        $data[$i]=array($d['message'],$d['mid'],$d['sid'],$d['rid']);
        $i++;
    }
    $data['t']=$i;
    return json_encode($data);
}
function getUserId($con)
{
    @session_start();
    $token = $_SESSION['token'];
    $result = mysqli_query($con, "SELECT uid FROM users where token='".$token."'");
    return mysqli_fetch_assoc($result)['uid'];
}
function addPchat($message,$sid,$rid)
{
    
}