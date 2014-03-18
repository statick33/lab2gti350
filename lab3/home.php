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
				<h3>News 1</h3>
				<p> Welcome on our homepage</p>
				<h3>News 2</h3>
				<p> This section containt all news from the website. </p>
				<h3>News 3</h3>
				<p> This section containt all news from the website. </p>
				<h3>News 4</h3>
				<p> This section containt all news from the website. </p>
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
