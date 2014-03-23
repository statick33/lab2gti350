<?php
	include('header.php'); 
?>
<style type="text/css">
.challenge{
	margin:0 auto;
}
.challengeTree{
	background-image: url('style/images/tree.png');
	background-repeat:no-repeat;
	width:700px;
	height:400px;
}
.challengeTree td{
	width:65px;
	height:50px;
	margin:0;
	padding:0px;
	text-align:center;
}
.challengeTree .win{
	color:green;
}
.challengeTree .lost{
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
.firstChallenger, .secondChallenger, .thirdChallenger{
	margin-top:35px;
	width:144px;
	float:left;
}
.firstChallenger div{
	clear:both;
	padding: 15px 0px 15px 32px;
	text-align:center;
}
.secondChallenger div{
	padding: 65px 0px 15px 135px;
	width:144px;
	text-align:center;
	float:left;
}
.thirdChallenger div{
	padding: 165px 0px 84px 250px;
	width:144px;
	text-align:center;
	float:left;
	
	color:#555;
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
	<h3> Competition Tree </h3>
		<div class="challengeTree">
			<div class="firstChallenger" >
				<div class="lost">Killing Spree</div>
				<div><a href='match.php' alt='match' >view match</a></div>
				<div class="win">Armata Gaming</div>
				<div>&nbsp;</div>
				<div class="lost">TF</div>
				<div><a href='match.php' alt='match' >view match</a></div>
				<div class="win">AB</div>
			</div>
			<div class="secondChallenger" >
				<div class="win">Armata Gaming</div>
				<div><a href='match.php' alt='match' >view match</a></div>
				<div class="lost">AB</div>
			</div>
			<div class="thirdChallenger" >
				<div class="border">Armata Gaming</div>
			</div>
		
		</div>
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
		<a href='team.php?teamID=1' >1. Armata Gaming</a>
		<br />
		<a href='team.php?teamID=1' >2. AB</a>
		<br />
		<a href='team.php?teamID=1' >3. TF</a>
		<br />
		<a href='team.php?teamID=1' >4. Killing Spree</a>
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
