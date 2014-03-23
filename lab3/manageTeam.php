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
			width:200px;
			height:146px;
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
			height:10px;
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
	<script>
		function onFileUpload()
		{
			$("input[id='my_file']").click();
		}
		function deletePlayer(object)
		{
			var r = confirm("Are you sure you want to remove this player?");
			if (r == true)
			{
				$(object).parent().parent().remove();
			}
		}
	</script>
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
						<tr><td>Picture :</td><td><img class="teamImage" src="style/images/team.png" /><div style="float:right;" onclick="onFileUpload()" class="smallButton">Upload</div><input type="file" id="my_file" style="display: none;" /></tr>
						<tr><td></td><td><a href="success.php?message=2"><div class="smallButton" style="float:right;">Save</div></a></td></tr>
					</table>
			<?php
				include('contentBoxFooter.php'); 
			?>
			</div>
		
			<div class="columnRight">
			<?php
				include('contentBoxHeader.php'); 
				$data = new Data();
				$tri = array(array("name" => "teams.name", "condition" => "=", "value" =>"Armata Gaming"));
				$players = $data->getAllPlayers($tri);
			?>
				<h3>Player list</h3>
					<table style="height:344px;">
						<tr><td>Username</td><td></td></tr>
				<?php
				for($i =0; $i<count($players); $i++){
					if($i ==0){ 
						echo "
						<tr><td><a href='player.php?playerID=". $players[$i]["idPlayer"] ."' alt='".$players[$i]["username"]."' >".$players[$i]["username"]."</a></td><td><img onclick='deletePlayer(this)' src='style/images/x.gif' /></td></tr>";
					}
					else{
						echo "
						<tr><td><a href='player.php?playerID=". $players[$i]["idPlayer"] ."' alt='".$players[$i]["username"]."' >".$players[$i]["username"]."</a></td><td><img onclick='deletePlayer(this)' src='style/images/x.gif' /></td></tr>";
					}
				}
				?>
					</table>
			<?php
				include('contentBoxFooter.php'); 
			?>
			</div>
			
			<div name="requests" style="width:50%">
			<?php
				include('contentBoxHeader.php'); 
			?>
				<h3>Player requests to join the team</h3>
				<?php 
				if(isset($_GET['message']))
				{
					if($_GET['message'] == 0)
					{
						echo'<p>Request accepted.</p>';
					}
					else if($_GET['message'] == 1)
					{
						echo'<p>Request denied.</p>';
					}
				}
				?>
				<table id="playerRequest" style="height:344px;">
					<tr><td>Username</td><td></td></tr>
					<?php
						if(isset($_GET['id']))
						{
							if($_GET['id'] != 1)
							{
								echo'<tr><td><a href="#">Player 6</a></td><td><a href="manageTeam.php?message=0&id=1#requests"><div class="smallButton">Accept</div></a></td><td><a href="manageTeam.php?message=1&id=1#requests"><div class="smallButton">Decline</div></a></td></tr>';
							}
							if($_GET['id'] != 2)
							{
								echo'<tr><td><a href="#">Player 7</a></td><td><a href="manageTeam.php?message=0&id=2#requests"><div class="smallButton">Accept</div></a></td><td><a href="manageTeam.php?message=1&id=2#requests"><div class="smallButton">Decline</div></a></td></tr>';
							}
							if($_GET['id'] != 3)
							{
								echo'<tr><td><a href="#">Player 8</a></td><td><a href="manageTeam.php?message=0&id=3#requests"><div class="smallButton">Accept</div></a></td><td><a href="manageTeam.php?message=1&id=3#requests"><div class="smallButton">Decline</div></a></td></tr>';
							}
						}
						else
						{
							echo'<tr><td><a href="#">Player 6</a></td><td><a href="manageTeam.php?message=0&id=1#requests"><div class="smallButton">Accept</div></a></td><td><a href="manageTeam.php?message=1&id=1#requests"><div class="smallButton">Decline</div></a></td></tr>';
							echo'<tr><td><a href="#">Player 7</a></td><td><a href="manageTeam.php?message=0&id=2#requests"><div class="smallButton">Accept</div></a></td><td><a href="manageTeam.php?message=1&id=2#requests"><div class="smallButton">Decline</div></a></td></tr>';
							echo'<tr><td><a href="#">Player 8</a></td><td><a href="manageTeam.php?message=0&id=3#requests"><div class="smallButton">Accept</div></a></td><td><a href="manageTeam.php?message=1&id=3#requests"><div class="smallButton">Decline</div></a></td></tr>';
						}
					?>
					
					
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
