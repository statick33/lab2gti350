<?php
	include('header.php'); 
?>
	<style>
		table
		{
			border-spacing: 20px;
		}
		table input
		{
			width:350px;
		}
		table textarea
		{
			width:350px;
			height:80px;
			background-color:black;
			border:2px solid #2e1a1e;
			color:white;
		}
		table textarea:focus
		{
			border: 2px solid white;
		}
		table td
		{
			vertical-align:top;
		}
		
		table .teamImage
		{
			width:100px;
			height:100px;
		}
		
		table #button
		{
			float:left;
			width:100px;
			height:50px;
			margin-left:20px;
		}
		table img
		{
			visibility:visible !important;
		}
		
		#playerRequest
		{
			margin-left:20px;
		}
		#playerRequest td
		{
			vertical-align:middle;
		}
		
		.twocolumn .columnLeft{
			width:50%;
			float:left;
		}
		.twocolumn .columnRight{
			width:50%;
			float:right;
		}
		
	</style>

		<?php
			include('mainContentBoxHeader.php'); 
		?>
		<h3>Manage Team</h3>
		<div class="twocolumn">

			<div class="columnLeft">
			<?php
				include('contentBoxHeader.php'); 
			?>
				<h3>Team informations</h3>
					<table style="height:344px;">
						<tr><td>Name :</td><td><input type="text" value="GTI 350 Dota Team"/></td></tr>
						<tr><td>Informations :</td><td><textarea></textarea></td></tr>
						<tr><td>Picture :</td><td><img class="teamImage" src="style/images/team.png" /><div style="float:right;" class="smallButton">Upload</div></tr>
						<tr><td></td><td><div class="smallButton" style="float:right;">Save</div></td></tr>
					</table>
			<?php
				include('contentBoxFooter.php'); 
			?>
			</div>
		
			<div class="columnRight">
			<?php
				include('contentBoxHeader.php'); 
			?>
				<h3>Player list</h3>
					<table style="height:344px;">
						<tr><td>Username</td><td></td></tr>
						<tr><td><a href="#">Player 1</a></td><td><img src="style/images/x.gif" /></td></tr>
						<tr><td><a href="#">Player 2</a></td><td><img src="style/images/x.gif" /></td></tr>
						<tr><td><a href="#">Player 3</a></td><td><img src="style/images/x.gif" /></td></tr>
						<tr><td><a href="#">Player 4</a></td><td><img src="style/images/x.gif" /></td></tr>
						<tr><td><a href="#">Player 5</a></td><td><img src="style/images/x.gif" /></td></tr>
					</table>
			<?php
				include('contentBoxFooter.php'); 
			?>
			</div>
			
			<div style="width:50%">
			<?php
				include('contentBoxHeader.php'); 
			?>
				<h3>Player requests to join the team</h3>
				<table id="playerRequest" style="height:344px;">
					<tr><td>Username</td><td></td></tr>
					<tr><td><a href="#">Player 6</a></td><td><div class="smallButton">Accept</div></td><td><div class="smallButton">Decline</div></td></tr>
					<tr><td><a href="#">Player 7</a></td><td><div class="smallButton">Accept</div></td><td><div class="smallButton">Decline</div></td></tr>
					<tr><td><a href="#">Player 8</a></td><td><div class="smallButton">Accept</div></td><td><div class="smallButton">Decline</div></td></tr>
				</table>
			<?php
				include('contentBoxFooter.php'); 
			?>
			</div>
			
		</div>
		<?php
			include('mainContentBoxFooter.php'); 
		?>
	
<?php
	include('footer.php'); 
?>
