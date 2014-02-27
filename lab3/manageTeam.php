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
		}
		table td
		{
			vertical-align:top;
		}
		
		table .teamImage
		{
			width:50px;
			height:50px;
			border:1px solid red;
			float:left;
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
		
	</style>
		<h3>Manage Team</h3>
		<table>
		<tr>
			<td>Team informations
				<table style="border:1px solid black; width:500px;height:344px;">
					<tr><td>Name :</td><td><input type="text" value="GTI 350 Dota Team"/></td></tr>
					<tr><td>Informations :</td><td><textarea></textarea></td></tr>
					<tr><td>Picture :</td><td><div class="teamImage">Preview</div><div id="button">Upload</div></tr>
					<tr><td></td><td><div id="button" style="float:right;">Save</div></td></tr>
				</table>
			</td>
			<td>Player list
				<table style="border:1px solid black; width:460px;height:344px;">
					<tr><td>Username</td><td></td></tr>
					<tr><td><a href="#">Player 1</a></td><td><img src="style/images/x.gif" /></td></tr>
					<tr><td><a href="#">Player 2</a></td><td><img src="style/images/x.gif" /></td></tr>
					<tr><td><a href="#">Player 3</a></td><td><img src="style/images/x.gif" /></td></tr>
					<tr><td><a href="#">Player 4</a></td><td><img src="style/images/x.gif" /></td></tr>
					<tr><td><a href="#">Player 5</a></td><td><img src="style/images/x.gif" /></td></tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>Player requests to join the team</td>
			<table id="playerRequest" style="border:1px solid black; width:500px;height:344px;">
				<tr><td>Username</td><td></td></tr>
				<tr><td><a href="#">Player 6</a></td><td><div id="button">Accept</div></td><td><div id="button">Decline</div></td></tr>
				<tr><td><a href="#">Player 7</a></td><td><div id="button">Accept</div></td><td><div id="button">Decline</div></td></tr>
				<tr><td><a href="#">Player 8</a></td><td><div id="button">Accept</div></td><td><div id="button">Decline</div></td></tr>
			</table>
		</tr>
	
<?php
	include('footer.php'); 
?>
