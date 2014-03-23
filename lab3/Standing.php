<?php
	include('header.php'); 
?>
<style type="text/css">
.challenge{
	margin:0 auto;
}
.challengeTree td{
	width:65px;
	height:50px;
	margin:0px;
	padding:0px;
	text-align:center;
}
.challengeTree td.border{
	border:1px solid black;
}
.challengeTree td.win{
	color:green;
}
.challengeTree td.lost{
	color:red;
}
.twocolumn .columnLeft{
	width:79%;
	float:left;
}
.twocolumn .columnRight{
	width:19%;
	float:right;
}
</style>
<?php
		include('mainContentBoxHeader.php'); 
	?>	
<div class="news twocolumn" >
	<div class="challenge columnLeft">
	<?php
		include('contentBoxHeader.php'); 
	?>
	<h3> Challenger Tree </h3>
		<table class="challengeTree">
			<tbody>
				<tr>
					<td class="border lost">Team1</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><a href='match.php' alt='match' >view match</a></td>
					<td></td>
					<td class="border win">Garma</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="border win">Garma</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><a href='match.php' alt='match' >view match</a></td>
					<td></td>
					<td class="border">Garma</td>
				</tr>
				<tr>
					<td class="border lost">TF</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><a href='match.php' alt='match' >view match</a></td>
					<td></td>
					<td class="border lost">AB</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="border win">AB</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				
			</tbody>
		</table>
	<?php
		include('contentBoxFooter.php'); 
	?>
	</div>
	<div class="columnRight">
	<?php
		include('contentBoxHeader.php'); 
	?>
		<h3> Ranking</h3>
		<p>
		1. Armata Gaming
		<br />
		2. AB
		<br />
		3. TF
		<br />
		4. Team1
		<br />
		</p>
	</div>
	<?php
		include('contentBoxFooter.php'); 
	?>
</div>
<?php
	include('mainContentBoxFooter.php'); 
	include('footer.php'); 
?>
