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
				// TODO FAIRE LES TRIS
					$data = new Data();
					$teams = $data->getAllTeams();
				for($i =0; $i<count($teams); $i++){
					echo "<tr>
						<td><a href='team.php?teamID=".$teams[$i]["id"]."' alt='".$teams[$i]["name"]."' >".$teams[$i]["name"]."</a></td>
						<td>".$teams[$i]["win"]."</td>
						<td>".$teams[$i]["lost"]."</td>
						<td><a href='team.php?teamID=".$teams[$i]["id"]."' alt='".$teams[$i]["name"]."' >view team profile</a></td>
						</tr>";
				}
				
				?>
			</tbody>
		</table>
	</div>
<?php
	include('footer.php'); 
?>
