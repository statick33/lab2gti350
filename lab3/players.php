<?php
	include('header.php'); 
	$_GET['tri'] = "username";
	$_GET['by'] = "ASC";
	
?>
<style type="text/css">
.players {
	padding-top:10px;
}
.players td{
	padding: 0 30px;
	text-align:center;
}
</style>
<script type="text/javascript">
	var tri = "<?php echo $_GET['tri']. "" . substr($_GET['by'],0,1); ?>";
	
	function triUsername(){
		if(tri == "usernameA"){
			window.location.href = 'http://localhost/lab2gti350/lab3/players.php?tri=username&by=DESC';
		}
		else{
			window.location.href = 'http://localhost/lab2gti350/lab3/players.php?tri=username&by=ASC';
		}
	}
	function triTeam(){
		if(tri == "teamA"){
			window.location.href = 'http://localhost/lab2gti350/lab3/players.php?tri=team&by=DESC';

		}
		else{
			window.location.href = 'http://localhost/lab2gti350/lab3/players.php?tri=team&by=ASC';
		}
	}
</script>
	<?php
		include('mainContentBoxHeader.php'); 
		include('contentBoxHeader.php'); 
	?>
	<h3> Players </h3>
	<div>
		<label for="txt_username">Search by : Username</label>
		<input type="text" name="txt_username" value="" />
		<table class="players">
			<tbody>
				<tr>
					<th onclick="triUsername()">Username</th>
					<th onclick="triTeam()">Team</th>
					<th></th>
					
				</tr>
				<?php 
					// TODO FAIRE LES TRIS + le SEARCH BY

					$data = new Data();
					if(isset($_GET['tri']) && isset($_GET['by'])){
						$order = array("name" => $_GET['tri'], "order"=> $_GET['by']);
						$players = $data->getAllPlayers(null,$order);
					}
					else{
						$players = $data->getAllPlayers();
					}
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
	include('contentBoxFooter.php'); 
	include('mainContentBoxFooter.php'); 
	include('footer.php'); 
?>
