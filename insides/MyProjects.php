<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ob_start();
include("proSub.php");
$card = new card();
$card->body = ob_get_clean();
$card->head = "Submit a new project";
$card->color_body="blue";
$card->foot="";
?>
<div class="w3-row">
    <div class="w3-quarter">
        <?php $card->draw();?>
    </div>
    <div class="w3-threequarter">
        <?php
    for($i=0;$i<=30;$i++)
    {   ?>
    <div class ="w3-row">
<div class="w3-third">
        <?php img_disc("../img/dummies/dummy-1.jpg","Head","This is a test snapshot"); ?>
    </div>
    <div class="w3-third">
        <?php img_disc("../img/dummies/dummy-1.jpg","Head","This is a test snapshot"); ?>
    </div>
    <div class="w3-third">
        <?php img_disc("../img/dummies/dummy-1.jpg","Head","This is a test snapshot"); ?>
    </div></div>  <?php } ?>
    </div>
</div>
    
