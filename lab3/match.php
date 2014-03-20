<?php
	include('header.php'); 
?>
	<style>
		#matchTable
		{
			text-align:center;
		}
		#matchTable .titleRow
		{
			font-weight:bold;
			font-size:22px;
		}
		#matchTable .teamImage
		{
			width:200px;
			height:146px;
			
			margin-left:auto;
			margin-right:auto;
		}
		#matchTable .smallButton
		{
			margin-left:auto;
			margin-right:auto;
			float:none;
		}
	    #matchTable textarea
		{
			width:100%;
			height:100%;
			background-color:black;
			border:2px solid #2e1a1e;
			color:white;
		}
		#matchTable textarea:focus
		{
			border: 2px solid white;
		}
	</style>
	<?php
		include('mainContentBoxHeader.php'); 
	?>
	<?php
		include('ContentBoxHeader.php'); 
	?>
	<h3>Match</h3>
	<table id="matchTable">
		<tr class='titleRow'><td></td><td> Team 1</td><td>VS</td><td>Team 2</td></tr>
		<tr><td></td><td> <img src="style/images/team.png" class="teamImage" </td><td></td><td><img src="style/images/team2.png" class="teamImage" /></td><td></td></tr>
		<tr><td>Current score :</td><td>2-1</td><td></td><td>1-2</td><td></td></tr>
		<tr><td>Predictions :</td><td>60%</td><td></td><td>40%</td><td></td></tr>
		<tr><td></td><td><div class="smallButton">Predict</div></td><td></td><td><div class="smallButton">Predict</div></td></tr>
		<tr><td>Chat :</td><td colspan="3">Captain 1 : When can you play?</td></tr>
		<tr><td></td><td colspan="3">Captain 2 : Wednesday 8pm.</td></tr>
		<tr><td></td><td colspan="3"><textarea></textarea></td><td style="width:100px;"><div style="width:100px;" class="smallButton">Reply</div></td></tr>
	</table>
	<?php
		include('ContentBoxFooter.php'); 
	?>
	<?php
		include('mainContentBoxFooter.php'); 
	?>
<?php
	include('footer.php'); 
?>
