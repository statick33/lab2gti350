<?php
	include('header.php'); 
?>
<style type="text/css">
.challenge{
	margin:0 auto;
}
.challengeTree td{
	width:75px;
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
	width:74%;
	float:left;
	border-right:1px solid black;
}
.twocolumn .columnRight{
	width:24%;
	float:right;
}
</style>
<div class="news twocolumn" >
	<div class="challenge columnLeft">
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
	</div>
	<div class="columnRight">
		<h3> Ranking</h3>
		<p>
		1. Garma
		<br />
		2. AB
		<br />
		3. TF
		<br />
		4. Team1
		<br />
		</p>
	</div>
</div>
<?php
	include('footer.php'); 
?>
