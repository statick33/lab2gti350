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
	<div class="smallButton" style="float:right !important;margin-top:10px;margin-left:0px;">Join team</div>
	<div class="smallButton" style="float:right !important;margin-top:10px;margin-left:0px;">Manage team</div>
	
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
		?>
			<h3>Player roster :</h3>
			<ul class="playerList" style="list-style-type: none; ">
				<li style="margin-top:0px !important;"><a href="#">Player 1</a></li>
				<li><a href="#">Player 2</a></li>
				<li><a href="#">Player 3</a></li>
				<li><a href="#">Player 4</a></li>
				<li><a href="#">Player 5</a></li>
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
	<!--<table id="teamTable" style="width:100%;">
		<tr>
			<td style="vertical-align:top;">Informations :</td><td colspan=3 style="width:300px;vertical-align:top;"> This is the best dota 2 team in north america idmnaisfnaodsfasodfnsdfansodfnasd <br /> apsodksdopf asdfaosdpfk asdfpokasdpofkas</td>
			<td colspan="2"><img style="margin-left:300px;" src="style/images/team.png" /></td>
			<td colspan="2" style="vertical-align:top;text-align:right;"></td>
		</tr>
		
		<tr style="padding-top:20px;">

		<td style="vertical-align:top;">Player roster :</td><td style="vertical-align:top;"> 
			<ul id="matchList" style="list-style-type: none; ">
				<li style="margin-top:0px !important;"><a href="#">Player 1</a></li>
				<li><a href="#">Player 2</a></li>
				<li><a href="#">Player 3</a></li>
				<li><a href="#">Player 4</a></li>
				<li><a href="#">Player 5</a></li>
			</ul>
			</td><td style="vertical-align:top;">Upcoming Matchs</td><td style="vertical-align:top;">
				<ul id="matchList" style="list-style-type: none; ">
					<li style="margin-top:0px !important;"><a href="#">Match 6 <br /><a href="#"> Against Team R</a></li>
					<li><a href="#">Match 7 </a><br /><a href="#"> Against Team T</a></li>
					<li><a href="#">Match 8 </a><br /><a href="#"> Against Team W</a></li>
				</ul>
			</td><td style="vertical-align:top;">Lastest matchs :</td><td> 
			<ul id="matchList" style="list-style-type: none; ">
				<li style="margin-top:0px !important;background-color:#6CBB3C;"><a href="#">Match 4<br /> 2-0 <br /> Against Team G</li>
				<li style="background-color:#DC381F;"><a href="#">Match 3</a><br /><a href="#"> 1-2 </a><br /><a href="#"> Against Team X</a></li>
				<li style="background-color:#DC381F;"><a href="#">Match 2</a><br /><a href="#"> 0-2 </a><br /><a href="#"> Against Team S</a></li>
			</ul>	
		</tr>
	</table>-->

	<?php
		include('mainContentBoxFooter.php'); 
	?>
<?php
	include('footer.php'); 
?>
