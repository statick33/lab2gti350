<?php
	include('header.php'); 
?>
	<style>
		table
		{
			width:1024px;
			text-align:center;
		}
		table .titleRow
		{
			font-weight:bold;
			font-size:22px;
		}
		table .teamImage
		{
			width:150px;
			height:150px;
			border:1px solid red;
			margin-left:auto;
			margin-right:auto;
		}
		table .button
		{
			margin-left:auto;
			margin-right:auto;
			float:none;
		}
	</style>
	<table>
		<tr class='titleRow'><td></td><td> Team 1</td><td>VS</td><td>Team 2</td></tr>
		<tr><td></td><td> <div class='teamImage'>Team 1 image</div> </td><td></td><td><div class='teamImage'>Team 2 image</div></td><td></td></tr>
		<tr><td>Current score :</td><td>2-1</td><td></td><td>1-2</td><td></td></tr>
		<tr><td>Predictions :</td><td>60%</td><td></td><td>40%</td><td></td></tr>
		<tr><td></td><td><div class="button">Predict</div></td><td></td><td><div class="button">Predict</div></td></tr>
		<tr><td>Chat :</td><td colspan="3">Captain 1 : When can you play?</td></tr>
		<tr><td></td><td colspan="3">Captain 2 : Wednesday 8pm.</td></tr>
		<tr><td></td><td colspan="3"><textarea style="width:100%;height:100%;"></textarea></td><td style="width:100px;"><div style="width:100px;" class="button">Reply</div></td></tr>
	
<?php
	include('footer.php'); 
?>
