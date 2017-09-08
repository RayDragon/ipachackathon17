<?php 

function card1($color="blue",$head="head",$body="body",$foot="foot",$maxw=700,$minw=300)
{?>
<script>
function hide_parent(a)
{
	a.parentNode.parentNode.style.display='none';
}
</script>
<div class="w3-card" 
	style="max-width:<?php echo $maxw?>;min-width:<?php echo $minw?>;float:left;width:100%;">
			<header class="w3-container w3-<?php echo $color;?>">
				<div class="w3-btn w3-green w3-hover-red w3-right" style="display: absolute;" 
					onclick="hide_parent(this);">X</div>
				<h1><?php echo $head;?></h1>
			</header>
			<div  class="w3-container"><h4><?php echo $body;?></h4></div>
			<footer  class="w3-container w3-<?php echo $color;?>"><h6><?php echo $foot;?></h6></footer>
		</div>
		<?php 
}

//$data = array("l1","www.facebook.com","l2","google.com","l3","#",array("hey","h1","#1","h2","#2","h3","#3"),"swap");
//echo json_encode($data);
class card
{
	public $color_head = "blue",$color_body="light-blue",$color_foot="blue";
	public $head="Head",$foot="Footer",$body="body",$maxw=780,$minw=300;
	function draw()
	{
		?>
		<script>
		function hide_parent(a)
		{
			a.parentNode.parentNode.parentNode.style.display='none';
		}
		</script>
		<div class="w3-container w3-padding-small">
		<div class="w3-card"
							style="max-width:<?php echo $this->maxw?>;min-width:<?php echo $this->minw?>;float:left;float:up;width:100%;">
							<header class="w3-container w3-<?php echo $this->color_head;?>">
								<div class="w3-btn w3-green w3-hover-red w3-right" style="display: absolute;"
									onclick="hide_parent(this);">X</div>
								<h1><?php echo $this->head;?></h1>
							</header>
							
							<div  class="w3-container w3-<?php echo $this->color_body?>"><h4><?php echo $this->body;?></h4></div>
			<footer  class="w3-container w3-<?php echo $this->color_foot;?>"><h6><?php echo $this->foot;?></h6></footer>
		</div></div>
		<?php  
	}
		
}
	
function img_disc($image,$head,$discript)
{
 ?>
                <div class="w3-padding">
<div class="w3-card-4" style="width:100%;max-width:400px;">
  <img src="<?php echo $image?>" alt="Avatar" style="width:100%;opacity:0.85">
  <div class="w3-container">
  <h4><b><?php echo $head?></b></h4>    
  <p><?php echo $discript?></p>    
  </div>
</div></div>
<?php }