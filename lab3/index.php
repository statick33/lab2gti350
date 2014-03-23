<?php
	include('header.php'); 
?>
<style type="text/css">
.twocolumn .columnLeft{
	width:74%;
	float:left;
	border-right:1px solid black;
}
.twocolumn .columnRight{
	width:24%;
	float:right;
}
</style>
	<?php
		include('mainContentBoxHeader.php'); 
	?>
	<div class="news twocolumn" >
			
			<div class="columnLeft">
			<?php
				include('contentBoxHeader.php'); 
			?>
				<h3>From DotA to The International 1: The Long Road</h3>
				<p>With the unconfirmed news about The International 4 looming ahead in July, it is time to review its past. Having our humble beginnings in the Dota 2 scene nearly four years ago, it is amazing how far the game has developed, as well as the community since then. This article will be split into two parts: The development of Dota 2 and The International 2011, with the former being the main focus.</p>
				<h3>Draft Analysis - Monster Invitational Final Game 5</h3>
				<p>The current meta is one of the most flexible we have ever witnessed in DotA2, with every hero being strong with proper execution and a suitable line-up. During the grand finals of Monster Energy Invitational, we were able to witness the true beauty of this fact, with Evil Geniuses using a very innovative strategy to take down Cloud9. </p>
			<?php
				include('contentBoxFooter.php'); 
			?>
			</div>
			
			<div class="columnRight" style="text-align:center;border:1px solid black;">
			<?php
				include('contentBoxHeader.php'); 
			?>
				<h3>Upcomming matchs </h3>
				<p> 
					1st april - Garma vs. CO
					<br />
					18th april - FA vs Team1
				</p>
			<?php
				include('contentBoxFooter.php'); 
			?>
			</div>
			<div style="clear:both;"></div>
		
	</div>
	<?php
		include('mainContentBoxFooter.php'); 
	?>


<?php
	include('footer.php'); 
?>
