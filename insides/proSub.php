<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. */

?>
<form action="projSub_final.php" method="post" enctype="multipart/form-data">
    <table class="w3-table">
    <tr>
        <td>Title</td>
        <td><input  class="w3-input" name="head"></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><input  class="w3-input" name="about"></td>
    </tr>
    <tr>
        <td>Image</td>
        <td><input  class="w3-input" type="file" name="fileToUpload" id="fileToUpload"></td>
    </tr>
</table>
    <td><input type="submit"></td>
</form>