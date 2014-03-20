<?php
	include('header.php'); 

?>
<style type="text/css">
.teams {
	padding-top:10px;
}
.teams td{
	padding: 0 50px;
	text-align:center;
}
</style>

<script type="text/javascript">
	var tri = "<?php echo $_GET['tri'] . '' . substr($_GET['by'],0,1); ?>";
	function triWin(){
		if(tri == "winA"){
			window.location.href = 'http://localhost/lab2gti350/lab3/teams.php?tri=win&by=DESC';

		}
		else{
			window.location.href = 'http://localhost/lab2gti350/lab3/teams.php?tri=win&by=ASC';
		}
	}
	function triLost(){
		if(tri == "lostA"){
			window.location.href = 'http://localhost/lab2gti350/lab3/teams.php?tri=lost&by=DESC';

		}
		else{
			window.location.href = 'http://localhost/lab2gti350/lab3/teams.php?tri=lost&by=ASC';
		}
	}
	function triTeam(){
		if(tri == "nameA"){
			window.location.href = 'http://localhost/lab2gti350/lab3/teams.php?tri=name&by=DESC';

		}
		else{
			window.location.href = 'http://localhost/lab2gti350/lab3/teams.php?tri=name&by=ASC';
		}
	}
</script>
	<?php
		include('mainContentBoxHeader.php'); 
		include('contentBoxHeader.php'); 
	?>
	<h3> Teams </h3>
	<div>
		<label for="txt_name">Search by : Name</label>
		<input type="text" name="txt_name" value="" />
		<table class="teams">
			<tbody>
				<tr>
					<th onclick="triTeam();">Team</th>
					<th onclick="triWin();">Win</th>
					<th onclick="triLost();">Lost</th>
					<th></th>
					
				</tr>
				<?php 
				// TODO FAIRE LES TRIS
					$data = new Data();
					if(isset($_GET['tri']) && isset($_GET['by'])){
						$order = array("name" => $_GET['tri'], "order"=> $_GET['by']);
						$teams = $data->getAllTeams(null,$order);
					}
					else{
						$teams = $data->getAllTeams();
					}				
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
		include('contentBoxFooter.php'); 
		include('mainContentBoxFooter.php'); 
	?>

<?php
	include('footer.php'); 
?>
