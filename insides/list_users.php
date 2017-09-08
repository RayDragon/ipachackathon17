<?php
include("../mylib/conn.php");
if(empty($_GET['add']))
    $add="*";
else $add=$_GET['add'];

$con = new conn();
$con->connect();

$query=$con->listVal("SELECT * FROM users where 1");

while($data= mysqli_fetch_assoc($query))
{
    if(strpos($data['name'],$add)==true || $add=="*"){
    ?>
<a class="w3-button w3-input" href="?nav=Search&add=<?php echo $add?>&rid=<?php echo $data['uid'];?>"><?php echo $data['name']?></a>
    <?php }
}
