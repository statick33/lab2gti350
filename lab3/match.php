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
		<?php
			if(isset($_GET['predict']))
			{
				if($_GET['predict'] == 1)
				{
					echo '<tr><td>Predictions :</td><td>80%</td><td></td><td>20%</td><td></td></tr>';
				}
				if($_GET['predict'] == 2)
				{
					echo '<tr><td>Predictions :</td><td>40%</td><td></td><td>60%</td><td></td></tr>';
				}
			}
			else
			{
				echo '<tr><td>Predictions :</td><td>60%</td><td></td><td>40%</td><td></td></tr>';
			}
		?>
		<tr><td></td><td><a href="match.php?predict=1"><div class="smallButton">Predict</div></a></td><td></td><td><a href="match.php?predict=2"><div class="smallButton">Predict</div></a></td></tr>
		<tr><td>Chat :</td><td colspan="3">Captain 1 : When can you play?</td></tr>
		<tr><td></td><td colspan="3">Captain 2 : Wednesday 8pm.</td></tr>
		<?php
			if(isset($_GET['reply']))
			{
				if($_GET['reply'] == 1)
				{
					echo '<tr><td></td><td colspan="3">Captain 1 : Test Reply.</td></tr>';
				}
			}
		?>
		<tr><td></td><td colspan="3"><textarea></textarea></td><td style="width:105px;"><a href="match.php?reply=1"><div style="width:105px;" class="smallButton">Reply</div></a></td></tr>
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
