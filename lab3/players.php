<?php
	include('header.php'); 
	include('data/Data.php');

?>
<style type="text/css">
.players {
	padding-top:10px;
}
.players td{
	padding: 0 50px;
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
					$data = new Data();
					$player = $data->getPlayer();
					$array = array("username" => array("Username1","Username2","Username3","Username4","Username5","Username6"),
									"team" => array("Garma","Team1","Team1","Garma","Garma","FA"),
									"win" => array("5","3","3","5","5","1"),
									"lost" => array("2","4","4","2","4","6")
					);
				for($i =0; $i<count($player); $i++){
					echo "<tr>
						<td>".$player[$i]["username"]."</td>
						<td>".$player[$i]["team"]."</td>
	
						<td><a href='player.php' alt='' >view profile</a></td>
						</tr>";
				}
				
				?>
			</tbody>
		</table>
	</div>
<?php
	include('footer.php'); 
?>
