<?php
	include('header.php'); 
?>
<style type="text/css">
.image{
	width:150px;
	height:150px;
	background-color:pink;
	text-align:center;
}
.threecolumn .columnLeft{
	width:30%;
	float:left;
}
.threecolumn .columnMiddle{
	width:30%;
	padding-left:30px;
	float:left;
}
.threecolumn .columnRight{
	width:30%;
	float:right;
}
td{
	width:250px;
}
.prevTeam, .prevMatch{
	padding: 5px;
	border:1px solid black;
	margin:0 auto;
	margin-bottom:15px;
}
<?php $playerID = $_GET['playerID'];
				$data = new Data();
				$player = $data->getPlayer($playerID);
		?>
</style>
	<h3> <?php echo $player[0]["username"] ?> </h3>
	<div class="threecolumn">
		<div class="image columnLeft">
			Image profil
		</div>
		
		<div class="columnMiddle">
			<table>
				<tbody>
					<tr>
						<td>Username</td>
						<td><?php echo $player[0]["username"] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $player[0]["email"] ?></td>
					</tr>
					<tr>
						<td>Country</td>
						<td><?php echo $player[0]["country"] ?></td>
					</tr>
					<tr>
						<td>Current team</td>
						<td><a href='team.php' alt='' ><?php echo $player[0]["name"] ?></a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="columnRight">
			<div class="prevMatch">
				<p> Previous Match
					<br />
					<a href='match.php' alt='match' >1st april - Garma vs. CO</a>
					<br />
					<a href='match.php' alt='match' >18th april - FA vs Team1</a>
				</p>
			</div>
			<?php 
			
			if($player[0]['previousTeam'] != NULL){
				$previousTeam = $data->getTeam($player[0]['previousTeam']);
				echo "
					<div class='prevTeam'>
						Previous teams
						<br />
						<a href='team.php?teamID=".$player[0]['previousTeam']."' alt='' >".$previousTeam[0]["name"]."</a>
					</div>
				";
				}
			?>
		</div>
	</div>
	<div style="clear:both;"></div>
<?php
	include('footer.php'); 
?>
