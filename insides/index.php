<?php
include('html/card.php');
include('html/body.php');
?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>StudMet</title>
<link href="html/w3.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
	$nav="Profile";
if(isset($_GET['nav']))
{
	if($_GET['nav']=='acDet')
		$nav="acDet";
	else $nav=$_GET['nav'];
}
nav1('["'.$nav.'","Home","../","Profile","?nav=Profile","Search","?nav=Search","My Projects","?nav=My Projects"]');
if($nav == "Profile")
{
	include('profile.php');// or die('error');
}
else if($nav=="Search")
{
    include('search.php');
}
else if($nav=="My Projects")
{
    include("./MyProjects.php");
}


//else echo $nav;
?>
