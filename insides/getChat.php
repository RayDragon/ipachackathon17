<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("../mylib/conn.php");
$con = new conn();
$con->connect();
$sid= getUserId($con->conn);
$rid=1;
//if(isset($_GET['sid'])) $sid=$_GET['sid'];
if(isset($_REQUEST['rid'])) $rid=$_REQUEST['rid'];
if(isset($_REQUEST['message']))
{
    $mid=id_get($con->conn,"pchat","mid");
    mysqli_query($con->conn, "INSERT INTO pchat values('".$mid."','".$_REQUEST['message']."','".$sid."','".$rid."','".time()."')") or die("error");
    die("done");
}

$data = json_decode(get_chat_history($con->conn, $rid, $sid),true);
$t=$data['t'];

for ($index = 0; $index < $t; $index++) 
{
    if($data[$index][2]!=$sid){
?>
<div class="w3-red w3-input">
    <table width="100%">
        <tr>
            <td class="w3-left"><?php echo $data[$index][0]?></td>
            <td class="w3-right"></td>
        </tr>
    </table>
</div>
    <?php   }
    else
    {
        ?>
<div class="w3-green w3-input">
    <table width="100%">
        <tr>
            <td class="w3-right"><?php echo $data[$index][0]?></td>
            <td class="w3-left"></td>
        </tr>
    </table>
</div>
    <?php 
    }

    
}

//var_dump($data);
?>