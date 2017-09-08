<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(empty($_GET['rid'])) $id=0;
else $id=$_GET['rid'];
$con = new conn();
$con->connect();
$data = mysqli_fetch_assoc($con->listVal("SELECT name from users where uid='".$id."'"));


?>
<div class="w3-button">
    <?php echo $data['name'];?>
</div>
<div class="w3-container">
    <?php include ('getChat.php');?>
</div>
<table width="100%">
    <tbody>
        <tr>
            <td width="48%"></td>
            <td width="50%"><input class="w3-input" id="mess"></td>
            <td width="2%"><button class="w3-button w3-hover-green" onclick="gooto()"><</button></td>
        </tr>
    <script>
        function gooto()
        {
            $.post("getChat.php",{message:$("#mess").val(),rid:"<?php echo $_GET['rid']?>"});
            location.reload();
        }
    </script>
    </tbody>
</table>


