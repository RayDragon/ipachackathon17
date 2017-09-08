<?php
function head_include()
{
	?>
	<link rel="stylesheet" type="text/css" href="w3.css">
	<link rel="icon" href="logo.png">
	<?php
}
function nav1($content="",$color="blue",$color2="black")
{ 
	$data = json_decode($content);
	//var_dump($data);
	echo"<div class='w3-bar w3-".$color."'>";
	echo '<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">|-_-|</a>';
	for($i=1;isset($data[$i]);$i++)
	{
		
		if(is_array($data[$i]))
		{
			/*In this case the array can be dropdown/input */
			if($data[$i][0]=="-i")
			{
				//in this case we will be having an input
				/*
				 * 1. First element is id, second is text to display :. we have*/
				echo "<input class='w3-bar-item w3-big w3-white w3-input w3-hide-small w3-hover-".$color2."' placeholder='".$data[$i][1]."' id='".$data[$i][2]."'>";
				
			}
			else if($data[$i][0]=="-r")
			{
				//we will have to shift the element to right
				echo "<a href='".$data[$i][2]."' class='w3-bar-item w3-right w3-button w3-hide-small w3-hover-".$color2."'>".$data[$i][1]."</a>";
			}
			else if($data[$i][0]=="-d")
			{
				//we are having a dropdown menu here
				/*1. first element is the Name to display on the dropdown menu
				 * 2. second contains its unique id*/
				?>
				<div class="w3-dropdown-hover">
    			<button class="w3-button"><?php echo $data[$i][1]; ?></button>
    			<div class="w3-dropdown-content w3-bar-block w3-card-4">
    			<?php 
    			for($j=2;isset($data[$i][$j]);$j+=2)
    			{
    				echo '<a href="'.$data[$i][$j+1].'" class="w3-bar-item w3-button">'.$data[$i][$j].'</a>';
    			}
    			?>
    			</div></div>
				<?php 
			}
			
		}
		else
		{
			if($data[0]!=$data[$i])
			echo "<a href='".$data[$i+1]."' class='w3-bar-item w3-button w3-hide-small w3-hover-".$color2."'>".$data[$i]."</a>";
			else echo "<span class='w3-bar-item w3-".$color2."'>".$data[$i]."</span>";
			
			$i++;
		}
	}
	echo '<div id="demo" class="w3-bar-block w3-'.$color.' w3-hide w3-hide-large w3-hide-medium">'; 
	for($i=1;isset($data[$i]);$i++)
	{
		
		if(is_array($data[$i]))
		{
			/*In this case the array can be dropdown/input */
			if($data[$i][0]=="-i")
			{
				//in this case we will be having an input
				/*
				 * 1. First element is id, second is text to display :. we have*/
				echo "<input class='w3-bar-item w3-big w3-white w3-input w3-hover-".$color2."' placeholder='".$data[$i][1]."' id='".$data[$i][2]."'>";
				
			}
			else if($data[$i][0]=="-r")
			{
				//we will have to shift the element to right
				echo "<a href='".$data[$i][2]."' class='w3-bar-item w3-right w3-button w3-hover-".$color2."'>".$data[$i][1]."</a>";
			}
			else if($data[$i][0]=="-d")
			{
				//we are having a dropdown menu here
				/*1. first element is the Name to display on the dropdown menu
				 * 2. second contains its unique id*/
				?>
				<div class="w3-dropdown-hover">
    			<button class="w3-button"><?php echo $data[$i][1]; ?></button>
    			<div class="w3-dropdown-content w3-bar-block w3-card-4">
    			<?php 
    			for($j=2;isset($data[$i][$j]);$j+=2)
    			{
    				echo '<a href="'.$data[$i][$j+1].'" class="w3-bar-item w3-button">'.$data[$i][$j].'</a>';
    			}
    			?>
    			</div></div>
				<?php 
			}
			
		}
		else
		{
			if($data[0]!=$data[$i])
				echo "<a href='".$data[$i+1]."' class='w3-bar-item w3-button w3-hover-".$color2."'>".$data[$i]."</a>";
				
				$i++;
		}
	}
		echo "</div></div>";
	 ?>	
		<script>
		function myFunction() {
    		var x = document.getElementById("demo");
    		if (x.className.indexOf("w3-show") == -1) {
        		x.className += " w3-show";
    		} else { 
        		x.className = x.className.replace(" w3-show", "");
    		}
		}
		</script>
  <?php 
}
?>