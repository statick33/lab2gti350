<?php
	include('header.php'); 
?>

<style type="text/css">
.twocolumn .columnLeft{
	float:left;
	width:70%;
}
.twocolumn .columnRight{
	float:right;
}

.threecolumn
{
	margin-top:10px;
}
.threecolumn .columnLeft{
	float:left;
	width:33%;
}
.threecolumn .columnMiddle{
	float:left;
	width:33%;
}
.threecolumn .columnRight{
	float:left;
	width:34%;
}

.matchList .win
{
	background-color:#1b5227;
}

.matchList .lost
{
	background-color:#4a1410;
}

.matchList .notplayed
{
	background-color:#363636;
}

.matchList li
{
	margin-top:20px;
	padding:10px;
	border: 1px solid black;
}
.playerList li
{
	margin-top:19px;
	padding:10px;
	border: 1px solid black;
	background-color:#363636;
}

#teamTable
{
	border-spacing: 10px;
}

</style>

	<?php
		include('mainContentBoxHeader.php'); 
	?>

	<h3 style="margin-bottom:0px;float:left;">Armata Gaming</h3>
	<a href="success.php?message=1"><div class="smallButton" style="float:right !important;margin-top:10px;margin-left:0px;">Join team</div></a>
	<a href="manageTeam.php"><div class="smallButton" style="float:right !important;margin-top:10px;margin-left:0px;">Manage team</div></a>
	
	<div class="twocolumn" >
	<?php
		include('contentBoxHeader.php'); 
	?>
		<div class="columnLeft">
			<h3>Informations :</h3>
				<p>Armata Gaming est une organisation canadienne de jeux en ligne multijoueurs qui vise l'excellence depuis 2008, dans une ambiance qui favorise le développement des joueurs. Fidèles à nos origines, nous sommes aujourd'hui présents sur la plupart des titres populaires qui offrent du contenu PvP.

				L'organisation est structurée en divisions, l'équivalent d'une équipe ou d'une guilde dans un jeu. Chaque division est dirigée par un manager, un capitaine et ses adjoints. Bien que les règles peuvent différer d'une division à une autre, tous les membres du staff essaient de véhiculer les mêmes valeurs fondamentales sur lesquelles a été bâtie notre communauté.</p>
		</div>
		<div class="columnRight" style="text-align:center;">
			<img src="style/images/team.png" />
		</div>
	<?php
		include('contentBoxFooter.php'); 
	?>
	</div>
	
	<div class="threecolumn" >
	
		<div class="columnLeft">
		<?php
			include('contentBoxHeader.php'); 
			$data = new Data();
			$tri = array(array("name" => "teams.name", "condition" => "=", "value" =>"Armata Gaming"));
			$players = $data->getAllPlayers($tri);
		?>
			<h3>Player roster :</h3>
			<ul class="playerList" style="list-style-type: none; ">
				<?php
				for($i =0; $i<count($players); $i++){
					if($i ==0){ 
						echo "
						<li style='margin: 0px !important;'><a href='player.php?playerID=". $players[$i]["id"] ."' alt='".$players[$i]["username"]."' >".$players[$i]["username"]."</a></li>";
					}
					else{
						echo "
						<li><a href='player.php?playerID=". $players[$i]["id"] ."' alt='".$players[$i]["username"]."' >".$players[$i]["username"]."</a></li>";
					}
				}
				?>

			</ul>
		<?php
			include('contentBoxFooter.php'); 
		?>
		</div>
		<div class="columnMiddle" style="text-align:center;">
		<?php
			include('contentBoxHeader.php'); 
		?>
			<h3>Upcoming Matchs :</h3>
			<ul class="matchList" style="list-style-type: none; ">
				<li class="notplayed" style="margin-top:0px !important;"><a href="#">Match 6 </a><br /><span style="color:#cccccc">Best of three</span> <br /><a href="#"> Against Team R</a></li>
				<li class="notplayed"><a href="#">Match 7 </a><br /><span style="color:#cccccc">Best of three</span> <br /><a href="#"> Against Team T</a></li>
				<li class="notplayed"><a href="#">Match 8 </a><br /><span style="color:#cccccc">Best of three</span> <br /><a href="#"> Against Team W</a></li>
			</ul>
		<?php
			include('contentBoxFooter.php'); 
		?>
		</div>
		<div class="columnRight" style="text-align:center;">
		<?php
			include('contentBoxHeader.php'); 
		?>
			<h3>Lastest matchs :</h3>
			<ul class="matchList" style="list-style-type: none; ">
				<li class="win" style="margin-top:0px !important;"><a href="#">Match 4</a><br /><span style="color:#cccccc">2-0</span> <br /> <a href="#">Against Team G</a></li>
				<li class="lost"><a href="#">Match 3</a><br /><span style="color:#cccccc">1-2</span> <br /> <a href="#">Against Team F</a></li>
				<li class="lost"><a href="#">Match 2</a><br /><span style="color:#cccccc">0-2</span> <br /> <a href="#">Against Team E</a></li>
			</ul>	
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
