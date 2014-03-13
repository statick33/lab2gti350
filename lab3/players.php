<?php
	include('header.php'); 

?>
<style type="text/css">
.players {
	padding-top:10px;
}
.players td{
	padding: 0 30px;
}
</style>
	<h3> Players </h3>
	<div>
		<label for="txt_username">Search by : Username</label>
		<input type="text" name="txt_username" value="" />
		<table class="players">
			<tbody>
				<tr>
					<th>Username</th>
					<th>Team</th>
					<th></th>
					
				</tr>
				<?php 
					// TODO FAIRE LES TRIS + le SEARCH BY

					$data = new Data();
					$players = $data->getAllPlayers();
				for($i =0; $i<count($players); $i++){
					echo "<tr>
						<td><a href='player.php?playerID=". $players[$i]["id"] ."' alt='".$players[$i]["username"]."' >".$players[$i]["username"]."</a></td>
						<td><a href='team.php?teamID=".$players[$i]["team"]."' alt='".$players[$i]["name"]."'>".$players[$i]["name"]."</a></td>
						<td><a href='player.php?playerID=". $players[$i]["id"] ."' alt='".$players[$i]["username"]."' >view profile</a></td>
						</tr>";
				}
				
				?>
			</tbody>
		</table>
	</div>
<?php
	include('footer.php'); 
?>
