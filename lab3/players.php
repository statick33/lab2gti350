<?php
	include('header.php'); 
	
	
?>
<style type="text/css">
.players {
	padding-top:10px;
}
.players td{
	padding: 0 30px;
	text-align:center;
}
.players td a{
	text-decoration:none;

}
.players th{
	font-size:20;
	text-decoration:underline;
}
</style>
<script type="text/javascript">
	var tri = "";
	var search ="";
	<?php if(isset($_GET['tri']) && isset($_GET['by'])): ?>
		var tri = "<?php echo $_GET['tri']. "" . substr($_GET['by'],0,1); ?>";
	<?php endif; ?>
	<?php if(isset($_GET['search'])) : ?>
		var search = "search=<?php echo $_GET['search'] ?>";
	<?php endif; ?>
	function triUsername(){
		if(tri == "usernameA"){
			window.location.href = '<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=username&by=DESC&'+ search;
		}
		else{
			window.location.href = '<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=username&by=ASC&'+ search;
		}
	}
	function triTeam(){
		if(tri == "teamA"){
			window.location.href = '<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=team&by=DESC&'+ search;

		}
		else{
			window.location.href = '<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=team&by=ASC&'+ search;
		}
	}
	function searchByUser(name){
		if(name != ""){
			window.location.href = '<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?search='+ name;
		}
	}
</script>
	<?php
		include('mainContentBoxHeader.php'); 
		include('contentBoxHeader.php'); 
	?>
	<h3> Players </h3>
	<div>
		<div style = "float:left;">
			<label for="txt_username">Search by Username :</label>
			<input type="text" name="txt_username" id="txt_username" value="" />
		</div>
		<div style="float:left;" onclick="searchByUser(document.getElementById('txt_username').value)" class="smallButton">Search</div>
		<table class="players">
			<tbody>
				<tr>
					<th onclick="triUsername()">Username</th>
					<th onclick="triTeam()">Team</th>
					<th></th>
					
				</tr>
				<?php 

					$data = new Data();
					$order = null;
					$search = null;
					if(isset($_GET['tri']) && isset($_GET['by'])){
						$order = array("name" => $_GET['tri'], "order"=> $_GET['by']);
					}
					if(isset($_GET['search'])){
						$search = array(array("name" => "username", "condition" => "=", "value" => $_GET['search']));
					}				
					$players = $data->getAllPlayers($search,$order);
					
				for($i =0; $i<count($players); $i++){
					echo "<tr>
						<td><a href='player.php?playerID=". $players[$i]["idPlayer"] ."' alt='".$players[$i]["username"]."' >".$players[$i]["username"]."</a></td>
						<td><a href='team.php?teamID=".$players[$i]["team"]."' alt='".$players[$i]["name"]."'>".$players[$i]["name"]."</a></td>
						<td><a href='player.php?playerID=". $players[$i]["idPlayer"] ."' alt='".$players[$i]["username"]."' >view profile</a></td>
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
