<?php
	include('header.php'); 
?>
<style type="text/css">
.image{
	width:150px;
	height:150px;
	background-color:pink;
	text-align:center;
}
.threecolumn .columnLeft{
	width:30%;
	float:left;
}
.threecolumn .columnMiddle{
	width:30%;
	padding-left:30px;
	float:left;
}
.threecolumn .columnRight{
	width:30%;
	float:right;
}
td{
	width:250px;
}
.prevTeam, .prevMatch{
	padding: 5px;
	border:1px solid black;
	margin:0 auto;
	margin-bottom:15px;
}

</style>
	<h3> Username1 </h3>
	<div class="threecolumn">
		<div class="image columnLeft">
			Image profil
		</div>
		<div class="columnMiddle">
			<table>
				<tbody>
					<tr>
						<td>Username</td>
						<td>Username1</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>asd@email.com</td>
					</tr>
					<tr>
						<td>Country</td>
						<td>Canada</td>
					</tr>
					<tr>
						<td>Time zone</td>
						<td>GMT -5</td>
					</tr>
					<tr>
						<td>Current team</td>
						<td><a href='team.php' alt='' >Team1</a></td>
					</tr>
					<tr>
						<td>Win</td>
						<td>13</td>
					</tr>
					<tr>
						<td>Lost</td>
						<td>2</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="columnRight">
			<div class="prevMatch">
				<p> Previous Match
					<br />
					<a href='match.php' alt='match' >1st april - Garma vs. CO</a>
					<br />
					<a href='match.php' alt='match' >18th april - FA vs Team1</a>
				</p>
			</div>
			<div class="prevTeam">
				Previous teams
				<br />
				<a href='team.php' alt='' >Garma</a>
			</div>
		</div>
	</div>
	<div style="clear:both;"></div>
<?php
	include('footer.php'); 
?>
