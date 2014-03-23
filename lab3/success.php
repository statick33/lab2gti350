<?php
	include('header.php'); 
?>
	<?php
		include('mainContentBoxHeader.php'); 
	?>
	<?php
		include('ContentBoxHeader.php'); 
	?>
	<div style="text-align:center;">
		<?php
			if(isset($_GET['message']))
			{
				if($_GET['message'] == 1)
				{
					echo'<h3>Your request has successfully been sent.</h3> <br /><a href="team.php">Return</a>';
				}
				else if($_GET['message'] == 2)
				{
					echo'<h3>Informations have been saved.</h3> <br /><a href="manageTeam.php">Return</a>';
				}
			}
		?>
	</div>
	<?php
		include('ContentBoxFooter.php'); 
	?>
	<?php
		include('mainContentBoxFooter.php'); 
	?>
<?php
	include('footer.php'); 
?>
