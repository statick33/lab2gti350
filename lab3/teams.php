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
.teams td a{
	text-decoration:none;

}
.teams th{
	font-size:20;
	text-decoration:underline;
}
</style>

<script type="text/javascript">
	var tri ="";
	var search ="";
	<?php if(isset($_GET['tri']) && isset($_GET['by'])): ?>
		var tri = "<?php echo $_GET['tri']. "" . substr($_GET['by'],0,1); ?>";
	<?php endif; ?>
	<?php if(isset($_GET['search'])) : ?>
		var search = "search=<?php echo $_GET['search'] ?>";
	<?php endif; ?>


	function triWin(){
		if(tri == "winA"){
			window.location.href = 'http://<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=win&by=DESC&'+ search;

		}
		else{
			window.location.href = 'http://<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=win&by=ASC&'+ search;
		}
	}
	function triLost(){
		if(tri == "lostA"){
			window.location.href = 'http://<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=lost&by=DESC&'+ search;

		}
		else{
			window.location.href = 'http://<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=lost&by=ASC&'+ search;
		}
	}
	function triTeam(){
		if(tri == "nameA"){
			window.location.href = 'http://<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=name&by=DESC&'+ search;

		}
		else{
			window.location.href = 'http://<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?tri=name&by=ASC&'+ search;
		}
	}
	function searchByName(name){
		if(name != ""){
			window.location.href = 'http://<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>?search='+ name;
		}
	}
</script>
	<?php
		include('mainContentBoxHeader.php'); 
		include('contentBoxHeader.php'); 
	?>
	<?php echo  $_SERVER['SERVER_NAME']."". $_SERVER['PHP_SELF'] ;?>
	<h3> Teams </h3>
	<div style="text-align:right;margin-top:-35px;"> <a href="Standing.php"> View Competition Tree </a></div>
	<div style="margin-top:15px;">
		<div style="float:left">
			<label for="txt_name">Search by Name :</label>
			<input type="text" name="txt_name" id="txt_name" value="" />
		</div>
		<div style="float:left;" onclick="searchByName(document.getElementById('txt_name').value)" class="smallButton">Search</div>
		<table class="teams">
			<tbody>
				<tr>
					<th onclick="triTeam();">Team</th>
					<th onclick="triWin();">Win</th>
					<th onclick="triLost();">Lost</th>
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
						$search = array(array("name" => "name", "condition" => "=", "value" => $_GET['search']));
					}				
					$teams = $data->getAllTeams($search, $order);
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
