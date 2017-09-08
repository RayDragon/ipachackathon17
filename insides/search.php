<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="w3-row w3-light-gray w3-padding">
    <div class="w3-quarter w3-padding">
        <input class="w3-input" oninput="update()" id='search_item'>
        <button class="w3-button w3-input" onclick="update()">Short</button>
        <script>
            function update()
            {
                var inp=$('#search_item').val();
                //alert(inp);
            }
        </script>
        <div id="list-container">
            <?php
                include("list_users.php");
            ?>
        </div>
    </div>
    <div class="w3-threequarter w3-padding">
        <?php include("chat_box.php"); ?>
    </div>
</div>
