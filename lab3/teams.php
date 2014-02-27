<?php
	include('header.php'); 
?>
<style type="text/css">
.teams {
	padding-top:10px;
}
.teams td{
	padding: 0 50px;
}
</style>
	<h3> Teams </h3>
	<div>
		<label for="txt_name">Search by : Name</label>
		<input type="text" name="txt_name" value="" />
		<table class="teams">
			<tbody>
				<tr>
					<th>Team</th>
					<th>Win</th>
					<th>Lost</th>
					<th></th>
					
				</tr>
				<?php 
					$array = array("team" => array("Garma","Team1","Team2","AB","TF","CO"),
									"win" => array("5","3","3","5","5","1"),
									"lost" => array("2","4","4","2","4","6")
					);
				for($i =0; $i<count($array["team"]); $i++){
					echo "<tr>
						<td>".$array["team"][$i]."</td>
						<td>".$array["win"][$i]."</td>
						<td>".$array["lost"][$i]."</td>
						<td><a href='team.php' alt='' >view team profile</a></td>
						</tr>";
				}
				
				?>
			</tbody>
		</table>
	</div>
<?php
	include('footer.php'); 
?>
