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
        $iTab[1]="CREATE TABLE `pchat`(`pmid` INTEGER PRIMARY KEY,`message` TEXT,`sid` INTEGER,`rid` INTEGER,`time` LONGINT)";
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
        if($i!=$data['uid']) break;
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
