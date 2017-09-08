<?php include('card.php');
	include('body.php');
?>
<html>
<head><title>Test of html</title>
<meta name = "viewport" content = "width = 940">
<link rel="stylesheet" href="w3.css">
</head>
<body>
	<?php card1("blue","Introduction","Hellow there, this is Ray,<br> Nice to meet you all","by -Govind Singh");
	nav1('["Games","Social","?nav=Social","Games","?nav=Games","Facebook","http://www.fb.com",
			["-d","Accounts","Google","http://google.co.in","Facebook","http://www.fb.com","HBook","htp://localhost/home/html/test.php"],
			["-i","Search....","toSearch"],
			["-r","By by..","?logout=1"]]',"blue");
	?>
</body>
</html>